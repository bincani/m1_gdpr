<?php
class Degriz_Gdprnewsletter_Helper_Data extends Mage_Core_Helper_Abstract {

    public function getIsActive() {
        return Mage::getStoreConfig('degriz_gdprnewsletter/general/isactive');
    }
	
}
