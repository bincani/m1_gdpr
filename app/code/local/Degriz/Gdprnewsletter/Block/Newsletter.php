<?php
class Degriz_Gdprnewsletter_Block_Newsletter extends Mage_Core_Block_Template {

    public function getIsActive() {
        return Mage::getStoreConfig('degriz_gdprnewsletter/general/isactive');
    }

    public function getText() {
        return Mage::getStoreConfig('degriz_gdprnewsletter/general/text');
    }

    public function getLink() {
        return Mage::getStoreConfig('degriz_gdprnewsletter/general/link');
    }

    public function getMessage() {
        return Mage::getStoreConfig('degriz_gdprnewsletter/general/message');
    }
	
}
