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
$xpdo_meta_map['MultimediaCollectionLiked']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_collection_liked',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'likedkey' => NULL,
    'memberid' => NULL,
    'addedon' => 0,
  ),
  'fieldMeta' => 
  array (
    'likedkey' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
    ),
    'memberid' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
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
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'likedkey' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'memberid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'DATEINDEX' => 
    array (
      'alias' => 'DATEINDEX',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'likedkey' => 
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
      'local' => 'likedkey',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Member' => 
    array (
      'class' => 'modUser',
      'local' => 'memberid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
