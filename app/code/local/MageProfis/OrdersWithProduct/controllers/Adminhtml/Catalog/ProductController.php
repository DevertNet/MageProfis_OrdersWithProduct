<?php
require_once(Mage::getModuleDir('controllers','Mage_Adminhtml').DS.'Catalog'.DS.'ProductController.php');

class MageProfis_OrdersWithProduct_Adminhtml_Catalog_ProductController extends Mage_Adminhtml_Catalog_ProductController
{
    /**
     * Get custom products grid and serializer block
     */
    public function customAction()
    {
        //Zend_Debug::dump("lol", 'debug');
        //die;
        $this->_initProduct();
        $this->loadLayout();
        $this->getLayout()->getBlock('catalog.product.edit.tab.custom')
            ->setProductsCustom($this->getRequest()->getPost('products_custom', null));
        $this->renderLayout();
    }
 
    /**
     * Get custom products grid
     */
    public function customGridAction()
    {
        $this->_initProduct();
        $this->loadLayout();
        $this->getLayout()->getBlock('catalog.product.edit.tab.custom')
            ->setProductsRelated($this->getRequest()->getPost('products_custom', null));
        $this->renderLayout();
    }
 
}