<?php

class Cotya_CartAdmin_Adminhtml_ShoppingcartsController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        //
    }

    public function saveAction()
    {
        //
    }

    public function deleteAction()
    {
        //
    }

}