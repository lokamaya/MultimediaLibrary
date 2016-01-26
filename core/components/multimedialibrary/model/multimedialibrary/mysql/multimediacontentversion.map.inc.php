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
$xpdo_meta_map['MultimediaContentVersion']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_content_version',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'contentid' => NULL,
    'edited_json' => '[]',
    'editedby' => NULL,
    'editedon' => 0,
    'is_active' => 0,
  ),
  'fieldMeta' => 
  array (
    'contentid' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'edited_json' => 
    array (
      'dbtype' => 'longtext',
      'phptype' => 'string',
      'null' => false,
      'default' => '[]',
    ),
    'editedby' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
    ),
    'editedon' => 
    array (
      'dbtype' => 'integer',
      'precision' => '20',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'is_active' => 
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
    'PARENTS' => 
    array (
      'alias' => 'PARENTS',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'contentid' => 
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
    'Content' => 
    array (
      'class' => 'MultimediaContent',
      'local' => 'contentid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Editor' => 
    array (
      'class' => 'modUser',
      'local' => 'editedby',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
