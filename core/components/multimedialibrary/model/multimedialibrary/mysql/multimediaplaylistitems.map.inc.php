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
$xpdo_meta_map['MultimediaPlaylistItems']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_playlist_items',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'playlistid' => NULL,
    'itemkey' => 0,
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
    'itemkey' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
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
    'PLAYLISTITEM' => 
    array (
      'alias' => 'PLAYLISTITEM',
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
        'itemkey' => 
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
    'Collection' => 
    array (
      'class' => 'MultimediaCollection',
      'local' => 'itemkey',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
