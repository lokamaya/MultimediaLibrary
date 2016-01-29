<?php
/**
 * MultimediaLibrary for MODX Revolution
 *
 * @package multimedialibrary
 * @author Zaenal/Lokamaya <zaenal[#]lokamaya.com>
 */
/**
 * @staticvar array $xpdo_meta_map for mapping related table
 */
$xpdo_meta_map['MultimediaCollectionInfo']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_collection_info',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'infokey' => NULL,
    'audio_dataformat' => NULL,
    'audio_bitrate' => NULL,
    'video_dataformat' => NULL,
    'video_bitrate' => NULL,
    'track_volume' => NULL,
    'comments_all' => NULL,
    'comments_id3v1' => NULL,
    'comments_id3v2' => NULL,
    'comments_ape' => NULL,
    'comments_lyrics3' => NULL,
    'info_warning' => NULL,
    'info_error' => NULL,
    'encoder_options' => NULL,
    'vbr_method' => NULL,
  ),
  'fieldMeta' => 
  array (
    'infokey' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
    ),
    'audio_dataformat' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '32',
      'phptype' => 'string',
      'null' => true,
    ),
    'audio_bitrate' => 
    array (
      'dbtype' => 'float',
      'phptype' => 'float',
      'null' => true,
    ),
    'video_dataformat' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '32',
      'phptype' => 'string',
      'null' => true,
    ),
    'video_bitrate' => 
    array (
      'dbtype' => 'float',
      'phptype' => 'float',
      'null' => true,
    ),
    'track_volume' => 
    array (
      'dbtype' => 'float',
      'phptype' => 'float',
      'null' => true,
    ),
    'comments_all' => 
    array (
      'dbtype' => 'longtext',
      'phptype' => 'string',
      'null' => true,
    ),
    'comments_id3v1' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'comments_id3v2' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'comments_ape' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'comments_lyrics3' => 
    array (
      'dbtype' => 'longtext',
      'phptype' => 'string',
      'null' => true,
    ),
    'info_warning' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'info_error' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'encoder_options' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '64',
      'phptype' => 'string',
      'null' => true,
    ),
    'vbr_method' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '64',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'infokey' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'Collection' => 
    array (
      'class' => 'MultimediaCollection',
      'local' => 'infokey',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
