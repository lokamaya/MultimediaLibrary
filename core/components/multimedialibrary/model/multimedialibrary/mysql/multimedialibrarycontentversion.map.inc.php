<?php
$xpdo_meta_map['MultimediaLibraryContentVersion']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_library_content_version',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'contentid' => NULL,
    'content' => NULL,
    'editedby' => NULL,
    'editeddate' => NULL,
    'active' => 0,
  ),
  'fieldMeta' => 
  array (
    'contentid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'content' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'editedby' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'editeddate' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'active' => 
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
);
