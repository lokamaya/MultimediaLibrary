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
$xpdo_meta_map['MultimediaPlaylistLiked']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_playlist_liked',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'playlistid' => NULL,
    'friendid' => NULL,
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
      'index' => 'pk',
    ),
    'friendid' => 
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
    'DATEINDEX' => 
    array (
      'alias' => 'DATEINDEX',
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
