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
$xpdo_meta_map['MultimediaUserHistory']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_user_history',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'historykey' => NULL,
    'userid' => NULL,
    'history_type' => 'play',
    'historyon' => 0,
    'history_message' => NULL,
  ),
  'fieldMeta' => 
  array (
    'historykey' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'userid' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'history_type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '16',
      'phptype' => 'string',
      'null' => false,
      'default' => 'play',
    ),
    'historyon' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '20',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'history_message' => 
    array (
      'dbtype' => 'longtext',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'COLID' => 
    array (
      'alias' => 'COLID',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'historykey' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'UID' => 
    array (
      'alias' => 'UID',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'userid' => 
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
      'local' => 'historykey',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'User' => 
    array (
      'class' => 'modUser',
      'local' => 'userid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
