<?php
/**
 * MultimediaLibrary
 *
 * Copyright 2016 by Zaenal Muttaqin <zaenal(#)lokamaya.com>
 *
 * @package MultimediaLibrary
 */
/**
 * Add in system settings
 * 
 * @package modldap
 * @subpackage build
 */
$settings = array();

$settings['multimedialibrary.allowed_extension']= $modx->newObject('modSystemSetting');
$settings['multimedialibrary.allowed_extension']->fromArray(array(
    'key' => 'multimedialibrary.allowed_extension',
    'value' => 'aac,asf,avi,flac,m3u,m4a,m4v,mov,mp1,mp2,mp3,mp4,mpeg,mpg,oga,ogg,ogv,wav,webm,wma,wmv',
    'xtype' => 'textfield',
    'namespace' => 'multimedialibrary',
    'area' => 'site',
),'',true,true);

$settings['multimedialibrary.path']= $modx->newObject('modSystemSetting');
$settings['multimedialibrary.path']->fromArray(array(
    'key' => 'multimedialibrary.path',
    'value' => 'files/',
    'xtype' => 'textfield',
    'namespace' => 'multimedialibrary',
    'area' => 'site',
),'',true,true);

$settings['multimedialibrary.path_relative']= $modx->newObject('modSystemSetting');
$settings['multimedialibrary.path_relative']->fromArray(array(
    'key' => 'multimedialibrary.path_relative',
    'value' => true,
    'xtype' => 'combo-boolean',
    'namespace' => 'multimedialibrary',
    'area' => 'site',
),'',true,true);

$settings['multimedialibrary.url_stream']= $modx->newObject('modSystemSetting');
$settings['multimedialibrary.url_stream']->fromArray(array(
    'key' => 'multimedialibrary.url_stream',
    'value' => 'stream/',
    'xtype' => 'textfield',
    'namespace' => 'multimedialibrary',
    'area' => 'site',
),'',true,true);

$settings['multimedialibrary.url_download']= $modx->newObject('modSystemSetting');
$settings['multimedialibrary.url_download']->fromArray(array(
    'key' => 'multimedialibrary.url_download',
    'value' => 'stream/download/',
    'xtype' => 'textfield',
    'namespace' => 'multimedialibrary',
    'area' => 'site',
),'',true,true);

$settings['multimedialibrary.url_icecast_source']= $modx->newObject('modSystemSetting');
$settings['multimedialibrary.url_icecast_source']->fromArray(array(
    'key' => 'multimedialibrary.url_icecast_source',
    'value' => 'http://domain.tld:8080/icecast/stream',
    'xtype' => 'textfield',
    'namespace' => 'multimedialibrary',
    'area' => 'site',
),'',true,true);

$settings['multimedialibrary.url_icecast_stream']= $modx->newObject('modSystemSetting');
$settings['multimedialibrary.url_icecast_stream']->fromArray(array(
    'key' => 'multimedialibrary.url_icecast_stream',
    'value' => 'stream/icecast/live',
    'xtype' => 'textfield',
    'namespace' => 'multimedialibrary',
    'area' => 'site',
),'',true,true);

$settings['multimedialibrary.table_checked']= $modx->newObject('modSystemSetting');
$settings['multimedialibrary.table_checked']->fromArray(array(
    'key' => 'multimedialibrary.table_checked',
    'value' => '0',
    'xtype' => 'numberfield',
    'namespace' => 'multimedialibrary',
    'area' => 'system',
),'',true,true);

return $settings;