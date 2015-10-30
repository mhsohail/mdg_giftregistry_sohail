<?php
class Mdg_Giftregistry_Model_Resource_Type_Collection extends  Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('mdg_giftregistry/type');
        parent::_construct();
    }
}