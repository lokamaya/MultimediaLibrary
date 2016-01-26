<?php
/**
 * MultimediaLibrary Build Script
 *
 * @package multimedialibrary
**/
if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;
            $modx->addPackage('multimedialibrary',MODX_CORE_PATH.'components/multimedialibrary/model/');
            
            $manager = $modx->getManager();
            $manager->createObjectContainer('MultimediaCollection');
            $manager->createObjectContainer('MultimediaCollectionInfo');
            $manager->createObjectContainer('MultimediaContent');
            $manager->createObjectContainer('MultimediaContentVersion');
            break;
        case xPDOTransport::ACTION_UNINSTALL:
            $modx =& $object->xpdo;
            $setting = $modx->getObject('modSystemSetting', array('key' => 'multimedialibrary.table_checked'));
            if ($setting) {
                $setting->set('value', '0');
                $setting->save();
            }
            break;
    }
}
return true;