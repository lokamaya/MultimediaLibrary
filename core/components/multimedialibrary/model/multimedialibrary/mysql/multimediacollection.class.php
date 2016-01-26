<?php
/**
 * MultimediaLibrary for MODX Revolution
 *
 * @package multimedialibrary
 * @author Zaenal/Lokamaya <zaenal[#]lokamaya.com>
 */
/**
 * class MultimediaCollection_mysql
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/multimediacollection.class.php');
class MultimediaCollection_mysql extends MultimediaCollection {}