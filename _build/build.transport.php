<?php
/**
 * MultimediaLibrary Build Script
 *
 * @package multimedialibrary
**/
$tstart = microtime(true);
set_time_limit(0);

/* set package info */
define('PKG_NAME',      'MultimediaLibrary');
define('PKG_NAME_LOWER',strtolower(MultimediaLibrary));
define('PKG_VERSION',   '0.1');
define('PKG_RELEASE',   'alpha');

echo "<pre>";
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
require_once $sources['build'] . '/includes/functions.php';

$modx= new modX();
$modx->initialize('mgr');
$modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
$modx->setLogTarget('ECHO');

/* load builder */
$modx->log(xPDO::LOG_LEVEL_INFO,'Creating package builder'); flush();
$modx->loadClass('transport.modPackageBuilder', '', false, true);

$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAME, PKG_VERSION, PKG_RELEASE);
$builder->registerNamespace(PKG_NAME_LOWER,false,true,'{core_path}components/'.PKG_NAME_LOWER.'/');



/* SNIPPETS */
/* ------------------------------------------------------ */
$modx->log(xPDO::LOG_LEVEL_INFO,'Adding in plugin.'); flush();

$snippets= $modx->newObject('modSnippet');
$snippets->set('name', PKG_NAME . 'Debug');
$snippets->set('description', '<strong>'.PKG_VERSION.'-'.PKG_RELEASE.'</strong> Output data entries from LDAP');
$snippets->set('category', 0);
$snippets->set('snippet', getSnippetContent($sources['snippets'].'snippet.multimedialibrary.php'));

//add properties to snippet
$properties = include $sources['data'].'snippet.multimedialibrary.properties.php';
$snippets->setProperties($properties);
unset($properties);

//create vehicle for plugin
$modx->log(modX::LOG_LEVEL_INFO,'Create snippet vehicle'); flush();
$vehicle = $builder->createVehicle($snippets, array (
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::UNIQUE_KEY => 'name',
));

$modx->log(modX::LOG_LEVEL_INFO,'Adding file resolvers to snippet...');
$vehicle->resolve('file',array(
    'source' => $sources['source_assets'],
    'target' => "return MODX_ASSETS_PATH . 'components/';",
));
$vehicle->resolve('file',array(
    'source' => $sources['source_core'],
    'target' => "return MODX_CORE_PATH . 'components/';",
));
$builder->putVehicle($vehicle);
unset($vehicle,$snippet);



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


/* now pack in the license file, readme and setup options */
/* ------------------------------------------------------ */
$builder->setPackageAttributes(array(
    'license' => file_get_contents($sources['docs'] . 'license.txt'),
    'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
    'changelog' => file_get_contents($sources['docs'] . 'changelog.txt'),
    //'setup-options' => array(
    //   'source' => $sources['build'].'setup.options.php',
    //),
));
$modx->log(modX::LOG_LEVEL_INFO,'Added package attributes and setup options.');

/* zip up the package */
$modx->log(modX::LOG_LEVEL_INFO,'Packing up transport package zip...');
$builder->pack();

$tend= microtime(true);
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f seconds", $totalTime);

$modx->log(xPDO::LOG_LEVEL_INFO, "Package Built.");
$modx->log(xPDO::LOG_LEVEL_INFO, "Execution time: {$totalTime}");
echo "</pre>";
exit();