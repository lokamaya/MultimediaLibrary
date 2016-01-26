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
$xpdo_meta_map['MultimediaPlaylist']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_playlist',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'palylist_owner' => NULL,
    'playlist_name' => 'playlist',
    'createdon' => 0,
    'is_public' => 0,
  ),
  'fieldMeta' => 
  array (
    'palylist_owner' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'playlist_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '64',
      'phptype' => 'string',
      'null' => false,
      'default' => 'playlist',
    ),
    'createdon' => 
    array (
      'dbtype' => 'integer',
      'precision' => '20',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'is_public' => 
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
    'UID' => 
    array (
      'alias' => 'UID',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'palylist_owner' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'UNIQUEID' => 
    array (
      'alias' => 'UNIQUEID',
      'primary' => false,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'palylist_owner' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'playlist_name' => 
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
    'Items' => 
    array (
      'class' => 'MultimediaPlaylistCollection',
      'local' => 'id',
      'foreign' => 'playlistid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'Owner' => 
    array (
      'class' => 'modUser',
      'local' => 'palylist_owner',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
