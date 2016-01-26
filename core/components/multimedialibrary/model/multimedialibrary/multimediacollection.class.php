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
        
        $md5_file = $this->generateMD5File();
        $this->isMD5match = true;
        if (!$this->isNew()) {
            if ($md5_file != $this->get('md5_file')) $this->isMD5match = false;
        }
        $this->set('md5_file', $md5_file);

        return parent :: save($cacheFlag);
    }
    
    public function generateMD5File() {
        $data  = $this->get('titles');
        $data .= $this->get('artists');
        $data .= $this->get('albums');
        $data .= $this->get('tracks');
        $data .= $this->get('years');
        $data .= $this->get('genres');
        $data .= $this->get('filename');
        $data .= $this->get('filesize');
        
        return md5($data);
    }
}