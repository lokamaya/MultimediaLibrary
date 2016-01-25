<?php
$xpdo_meta_map['MultimediaLibrary']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_library',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'parentid' => NULL,
    'titles' => '',
    'artists' => '',
    'albums' => '',
    'tracks' => '',
    'years' => '0000',
    'genres' => '',
    'tags' => '',
    'remix' => '',
    'filename' => NULL,
    'filename_rename' => NULL,
    'filesize' => 0,
    'fileformat' => '',
    'file_timestamp' => 0,
    'file_modified' => 0,
    'play_seconds' => 0,
    'track_volume' => 0,
    'md5_file' => '',
    'disabled' => 0,
  ),
  'fieldMeta' => 
  array (
    'parentid' => 
    array (
      'dbtype' => 'int',
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
      'default' => '',
    ),
    'artists' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'albums' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'tracks' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '7',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'years' => 
    array (
      'dbtype' => 'year',
      'precision' => '4',
      'phptype' => 'string',
      'null' => false,
      'default' => '0000',
      'index' => 'index',
    ),
    'genres' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'tags' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'remix' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
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
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'fileformat' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'file_timestamp' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'file_modified' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
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
    'track_volume' => 
    array (
      'dbtype' => 'float',
      'phptype' => 'float',
      'null' => false,
      'default' => 0,
    ),
    'md5_file' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '32',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'disabled' => 
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
    'UFILENAME' => 
    array (
      'alias' => 'UFILENAME',
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
);
