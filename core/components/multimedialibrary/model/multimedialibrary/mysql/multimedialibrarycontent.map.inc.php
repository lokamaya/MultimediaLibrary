<?php
$xpdo_meta_map['MultimediaLibraryContent']= array (
  'package' => 'multimedialibrary',
  'version' => '1.1',
  'table' => 'multimedia_library_content',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'multimedialibrary' => NULL,
    'resource_id' => NULL,
    'library_id' => 0,
    'content' => NULL,
    'content_type' => '',
    'createdby' => NULL,
    'createddate' => NULL,
  ),
  'fieldMeta' => 
  array (
    'multimedialibrary' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'resource_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
    ),
    'library_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'content' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'content_type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'createdby' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
    ),
    'createddate' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
  ),
  'indexes' => 
  array (
    'CONTENTTYPE' => 
    array (
      'alias' => 'CONTENTTYPE',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'multimedialibrary' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'content_type' => 
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
        'multimedialibrary' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
