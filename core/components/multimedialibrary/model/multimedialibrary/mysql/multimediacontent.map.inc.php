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
$xpdo_meta_map['MultimediaContent']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_content',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'contentkey' => NULL,
    'content_json' => NULL,
    'content_type' => 'image',
    'createdby' => NULL,
    'createdon' => 0,
    'is_disabled' => 0,
  ),
  'fieldMeta' => 
  array (
    'contentkey' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'content_json' => 
    array (
      'dbtype' => 'longtext',
      'phptype' => 'string',
      'null' => false,
    ),
    'content_type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => 'image',
    ),
    'createdby' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
    ),
    'createdon' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '20',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'is_disabled' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
  'indexes' => 
  array (
    'COLLECTIONID' => 
    array (
      'alias' => 'COLLECTIONID',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'contentkey' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'CONTENTTYPE' => 
    array (
      'alias' => 'CONTENTTYPE',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'contentkey' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'content_type' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'Version' => 
    array (
      'class' => 'MultimediaContentVersion',
      'local' => 'id',
      'foreign' => 'contentid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'Collection' => 
    array (
      'class' => 'MultimediaCollection',
      'local' => 'contentkey',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Creator' => 
    array (
      'class' => 'modUser',
      'local' => 'createdby',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
