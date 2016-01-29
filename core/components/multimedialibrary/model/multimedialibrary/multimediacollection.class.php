<?php
/**
 * MultimediaLibrary for MODX Revolution
 *
 * @package multimedialibrary
 * @author Zaenal/Lokamaya <zaenal[#]lokamaya.com>
 */
/**
 * class MultimediaCollection
 */
class MultimediaCollection extends xPDOSimpleObject  {
    public $isMD5modified;
    public $Info;
    public $Content;
    
    /**
     * Overrides xPDOObject::save to add edited/created auto-filling fields
     *
     * {@inheritDoc}
     */
    public function save($cacheFlag = null) {
        //$now = new DateTime();
        
        $md5_data = $this->libraryGenerateMD5Data();
        $this->isMD5match = true;
        if (!$this->isNew()) {
            if ($md5_data != $this->get('md5_data')) $this->isMD5match = false;
        } else {
            $this->set('md5_data', $md5_data);
        }

        return parent :: save($cacheFlag);
    }
    
    public function libraryGenerateMD5Data() {
        $data  = $this->get('titles');
        $data .= $this->get('artists');
        $data .= $this->get('albums');
        $data .= $this->get('tracks');
        $data .= $this->get('years');
        $data .= $this->get('genres');
        $data .= $this->get('remix');
        $data .= $this->get('filename');
        $data .= $this->get('filesize');
        $data .= $this->get('idtags');
        
        return md5($data);
    }
}