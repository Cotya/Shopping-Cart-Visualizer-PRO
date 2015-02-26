<?php

class Cotya_CartAdmin_Block_Adminhtml_Carts extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_controller = 'adminhtml_carts';
        $this->_blockGroup = 'cartadmin';
        $this->_headerText = Mage::helper('adminhtml')->__('Shopping Carts');
    }

}