<?php
class Mdg_Giftregistry_Model_Resource_Type extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('mdg_giftregistry/type', 'type_id');
    }
}