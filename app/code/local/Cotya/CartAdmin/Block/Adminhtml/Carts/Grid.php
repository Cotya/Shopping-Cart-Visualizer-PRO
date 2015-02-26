<?php

class Cotya_CartAdmin_Block_Adminhtml_Carts_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('cart_admin');
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('desc');
        $this->setSaveParametersInSession(true);
    }

    /**
     * todo filter active or default collection of carts
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('sales/quote')
            ->getCollection()
            ->addFieldToSelect('*');
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * todo get columns from store config
     * @return $this
     * @throws Exception
     */
    protected function _prepareColumns()
    {
        $this->addColumn('entity_id', [
            'header'    => Mage::helper('adminhtml')->__('ID'),
            'align'     =>'right',
            'width'     => '50px',
            'index'     => 'entity_id',
        ]);
        $this->addColumn('created_at', [
            'header'    => Mage::helper('adminhtml')->__('Created'),
            'align'     =>'left',
            'index'     => 'created_at',
        ]);
        $this->addColumn('updated_at', [
            'header'    => Mage::helper('adminhtml')->__('Updated'),
            'align'     =>'left',
            'index'     => 'updated_at',
        ]);
        $this->addColumn('subtotal', [
            'header'    => Mage::helper('adminhtml')->__('Subtotal'),
            'align'     =>'left',
            'index'     => 'subtotal',
        ]);
        $this->addColumn('items_qty', [
            'header'    => Mage::helper('adminhtml')->__('Items Qty'),
            'align'     =>'left',
            'index'     => 'items_qty',
        ]);

        return parent::_prepareColumns();
    }

    /**
     * todo get row url for cart view page
     * @param $row
     * @return null
     */
    public function getRowUrl($row)
    {
        return null;
    }
}