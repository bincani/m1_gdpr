<?php
class Degriz_Gdprnewsletter_Block_Newsletter_Subscriber_Grid extends Mage_Adminhtml_Block_Newsletter_Subscriber_Grid
{

    protected function _prepareColumns()
    {
        parent::_prepareColumns();

        $this->addColumn('change_status_at', array(
                'header'=> Mage::helper('newsletter')->__('Date'),
                'index' => 'change_status_at',
                'type'  => 'text',
                'width' => '100px',
        ));

        return parent::_prepareColumns();
    }
    
}