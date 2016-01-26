<?php
/**
 * MultimediaLibrary
 *
 * @package MultimediaLibrary
 * @author Jason Coward <jason@modx.com>
 */
$tstart = microtime(true);
set_time_limit(0);

/* set package info */
define('PKG_NAME',      'MultimediaLibrary');
define('PKG_NAME_LOWER',strtolower(PKG_NAME));
define('PKG_VERSION',   '0.2.0');
define('PKG_RELEASE',   'alpha');

/* define sources */
$root = dirname(dirname(__FILE__)) . '/';
$sources = array(
    'root' => $root,
    'build' => $root . '_build/',
    'resolvers' => $root . '_build/resolvers/',
    'data' => $root . '_build/data/',
    'snippets' => $root.'core/components/'.PKG_NAME_LOWER.'/elements/snippets/',
    'plugins' => $root.'core/components/'.PKG_NAME_LOWER.'/elements/plugins/',
    'lexicon' => $root . 'core/components/'.PKG_NAME_LOWER.'/lexicon/',
    'docs' => $root.'core/components/'.PKG_NAME_LOWER.'/docs/',
    'source_assets' => $root.'assets/components/'.PKG_NAME_LOWER,
    'source_core' => $root.'core/components/'.PKG_NAME_LOWER,
);
unset($root);

/* instantiate MODx */
require_once $sources['build'].'build.config.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
require_once $sources['build'] . '/data/functions.php';

$modx= new modX();
$modx->initialize('mgr');
$modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
$modx->setLogTarget('ECHO');
echo "<pre>\n";

/* load builder */
$modx->loadClass('transport.modPackageBuilder', '', false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAME, PKG_VERSION, PKG_RELEASE);
$builder->registerNamespace(PKG_NAME_LOWER, false, true, '{core_path}components/' . PKG_NAME_LOWER . '/');

/* create plugin object */
$modx->log(xPDO::LOG_LEVEL_INFO,'Adding in snippet.'); flush();
$object= $modx->newObject('modSnippet');
$object->set('name', PKG_NAME);
$object->set('description', '<strong>'.PKG_VERSION.'-'.PKG_RELEASE.'</strong> Basic snippet for ' . PKG_NAME . '.');
$object->set('category', 0);
$object->set('snippet', getSnippetContent($sources['snippets'].'snippet.multimedialibrary.php'));
$properties = include $sources['data'].'snippet.multimedialibrary.properties.php';
$object->setProperties($properties);
unset($properties);


/* create a transport vehicle for the data object */
$vehicle = $builder->createVehicle($object, array(
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::UNIQUE_KEY => 'name',
));
$vehicle->resolve('file',array(
    'source' => $sources['source_core'],
    'target' => "return MODX_CORE_PATH . 'components/';",
));
$builder->putVehicle($vehicle);

/* SYSTEM SETTING */
/* ------------------------------------------------------ */
$modx->log(xPDO::LOG_LEVEL_INFO,'Adding in system setting.'); flush();

$settings = array();
$settings = include $sources['data'].'system.settings.php';
foreach ($settings as $setting) {
    $vehicle = $builder->createVehicle($setting, array(
        xPDOTransport::UNIQUE_KEY => 'key',
        xPDOTransport::PRESERVE_KEYS => true,
        xPDOTransport::UPDATE_OBJECT => false,
    ));
    $builder->putVehicle($vehicle);
}

$modx->log(modX::LOG_LEVEL_INFO,'Adding in PHP resolvers...');
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'resolve.tables.php',
));
$builder->putVehicle($vehicle);
unset($vehicle,$snippet);

/* now pack in the license file, readme and setup options */
$builder->setPackageAttributes(array(
    'license' => file_get_contents($sources['docs'] . 'license.txt'),
    'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
    'changelog' => file_get_contents($sources['docs'] . 'changelog.txt'),
    //'setup-options' => array(
    //    'source' => $sources['build'] . 'setup.options.php',
    //),
));

/* zip up the package */
$builder->pack();

$tend= microtime(true);
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f seconds", $totalTime);

$modx->log(xPDO::LOG_LEVEL_INFO, "Package Built.");
$modx->log(xPDO::LOG_LEVEL_INFO, "Execution time: {$totalTime}");
echo "\n</pre>\n";
exit();
