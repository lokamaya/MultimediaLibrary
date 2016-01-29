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
$xpdo_meta_map['MultimediaPlaylistComment']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_playlist_comment',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'playlistid' => NULL,
    'friendid' => NULL,
    'comment' => NULL,
    'addedon' => 0,
  ),
  'fieldMeta' => 
  array (
    'playlistid' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'friendid' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'comment' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
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
    'PLAYLIST' => 
    array (
      'alias' => 'PLAYLIST',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'playlistid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'USERID' => 
    array (
      'alias' => 'USERID',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'friendid' => 
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
        'playlistid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'friendid' => 
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
    'Playlist' => 
    array (
      'class' => 'MultimediaPlaylist',
      'local' => 'playlistid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Friend' => 
    array (
      'class' => 'modUser',
      'local' => 'friendid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
