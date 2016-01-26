<?php
/**
 * MultimediaLibrary for MODX Revolution
 *
 * @package multimedialibrary
 * @author Zaenal/Lokamaya <zaenal[#]lokamaya.com>
 */
/**
 * class MultimediaContent_mysql
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/multimediacontent.class.php');
class MultimediaContent_mysql extends MultimediaContent {}