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
$xpdo_meta_map['MultimediaCollection']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_collection',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'parentid' => NULL,
    'titles' => '(no title)',
    'artists' => NULL,
    'artistsid' => 0,
    'albums' => NULL,
    'tracks' => 0,
    'years' => 0,
    'genres' => NULL,
    'remix' => NULL,
    'comments' => NULL,
    'recdate' => NULL,
    'filename' => NULL,
    'filename_rename' => NULL,
    'filesize' => 0,
    'fileformat' => NULL,
    'file_timestamp' => 0,
    'file_modified' => 0,
    'play_seconds' => 0,
    'is_private' => 0,
    'is_subscribe' => 0,
    'is_disabled' => 0,
    'idtags' => NULL,
    'md5_data' => NULL,
    'custom_data' => NULL,
  ),
  'fieldMeta' => 
  array (
    'parentid' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'titles' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '(no title)',
    ),
    'artists' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
      'index' => 'index',
    ),
    'artistsid' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'albums' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
      'index' => 'index',
    ),
    'tracks' => 
    array (
      'dbtype' => 'integer',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'years' => 
    array (
      'dbtype' => 'integer',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'genres' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '32',
      'phptype' => 'string',
      'null' => true,
    ),
    'remix' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'comments' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'recdate' => 
    array (
      'dbtype' => 'date',
      'phptype' => 'date',
      'null' => true,
      'index' => 'index',
    ),
    'filename' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'index' => 'unique',
    ),
    'filename_rename' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'filesize' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'fileformat' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'file_timestamp' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '20',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'file_modified' => 
    array (
      'dbtype' => 'integer',
      'attributes' => 'unsigned',
      'precision' => '20',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'play_seconds' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '7,2',
      'phptype' => 'float',
      'null' => false,
      'default' => 0,
    ),
    'is_private' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'is_subscribe' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
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
    'idtags' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '64',
      'phptype' => 'string',
      'null' => true,
    ),
    'md5_data' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '32',
      'phptype' => 'string',
      'null' => true,
    ),
    'custom_data' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'fieldAliases' => 
  array (
    'authors' => 'artists',
    'topics' => 'albums',
    'playtime' => 'play_seconds',
    'publishon' => 'recdate',
  ),
  'indexes' => 
  array (
    'FILENAMEINDEX' => 
    array (
      'alias' => 'FILENAMEINDEX',
      'primary' => false,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'filename' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'ALBUMINDEX' => 
    array (
      'alias' => 'ALBUMINDEX',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'albums' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'YEARSINDEX' => 
    array (
      'alias' => 'YEARSINDEX',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'years' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'RECORDING' => 
    array (
      'alias' => 'RECORDING',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'recdate' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'ALBUMYEARINDEX' => 
    array (
      'alias' => 'ALBUMYEARINDEX',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'albums' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'years' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'ARTISTSINDEX' => 
    array (
      'alias' => 'ARTISTSINDEX',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'artists' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'PARENTS' => 
    array (
      'alias' => 'PARENTS',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'parentid' => 
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
    'Childs' => 
    array (
      'class' => 'MultimediaCollection',
      'local' => 'id',
      'foreign' => 'parentid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Info' => 
    array (
      'class' => 'MultimediaCollectionInfo',
      'local' => 'id',
      'foreign' => 'infokey',
      'cardinality' => 'one',
      'owner' => 'local',
    ),
    'Comment' => 
    array (
      'class' => 'MultimediaCollectionComment',
      'local' => 'id',
      'foreign' => 'commentkey',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Liked' => 
    array (
      'class' => 'MultimediaCollectionLiked',
      'local' => 'id',
      'foreign' => 'likedkey',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Content' => 
    array (
      'class' => 'MultimediaContent',
      'local' => 'id',
      'foreign' => 'contentkey',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'PlaylistItem' => 
    array (
      'class' => 'MultimediaPlaylistItems',
      'local' => 'id',
      'foreign' => 'itemkey',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'History' => 
    array (
      'class' => 'MultimediaUserHistory',
      'local' => 'id',
      'foreign' => 'historykey',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'Parent' => 
    array (
      'class' => 'MultimediaCollection',
      'local' => 'parentid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
