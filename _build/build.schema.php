<?php
/**
 * Build Schema script
 *
 * @package multimedialibrary
 * @subpackage build
 */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

require_once dirname(__FILE__).'/build.config.php';
include_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx= new modX();
$modx->initialize('mgr');
$modx->loadClass('transport.modPackageBuilder','',false, true);
echo '<pre>'; /* used for nice formatting of log messages */
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget('ECHO');

$root = dirname(dirname(__FILE__)).'/';
$sources = array(
    'root' => $root,
    'data' => $root.'_build/data/',
    'core' => $root.'core/components/multimedialibrary/',
    'model' => $root.'core/components/multimedialibrary/model/',
    'schema' => $root.'core/components/multimedialibrary/model/schema/',
    'schema_file' => $root.'core/components/multimedialibrary/model/schema/multimedialibrary.mysql.schema.xml',
    'assets' => $root.'assets/components/multimedialibrary/',
);
$manager= $modx->getManager();
$generator= $manager->getGenerator();
if (!is_dir($sources['model'])) {
    $modx->log(modX::LOG_LEVEL_ERROR,'Model directory not found!');
    die('Model directory not found!');
}
if (!file_exists($sources['schema_file'])) {
    $modx->log(modX::LOG_LEVEL_ERROR,'Schema file not found!');
    die('Schema file not found!');
}

error_reporting(E_ALL);

$generator->classTemplate = file_get_contents($sources['data'].'tpl/tpl_class.tpl');
$generator->platformTemplate = file_get_contents($sources['data'].'tpl/tpl_classplatform.tpl');
$generator->mapHeader = file_get_contents($sources['data'].'tpl/tpl_mapheader.tpl');

$generator->parseSchema($sources['schema_file'],$sources['model']);


$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

echo "\nExecution time: {$totalTime}\n";

exit ();