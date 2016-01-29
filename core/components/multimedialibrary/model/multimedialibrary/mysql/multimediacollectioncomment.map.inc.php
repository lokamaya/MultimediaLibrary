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
$xpdo_meta_map['MultimediaCollectionComment']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_collection_comment',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'commentkey' => NULL,
    'userid' => 0,
    'comment' => '',
    'addedon' => 0,
  ),
  'fieldMeta' => 
  array (
    'commentkey' => 
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
      'default' => 0,
    ),
    'comment' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'addedon' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '20',
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
        'commentkey' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'NONUNIQUEUSER' => 
    array (
      'alias' => 'NONUNIQUEUSER',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'commentkey' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'userid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'addedon' => 
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
      'local' => 'commentkey',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Member' => 
    array (
      'class' => 'modUser',
      'local' => 'userid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
