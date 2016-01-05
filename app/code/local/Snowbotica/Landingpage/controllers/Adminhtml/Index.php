<?php

    // http://fishpig.co.uk/magento/tutorials/custom-tabs-magento-product-admin/
    // http://www.bubblecode.net/en/2012/01/30/add-custom-settings-in-magento-admin-panel/
    // http://alanstorm.com/magento_javascript_events
    // http://alanstorm.com/custom_magento_system_configuration
    // http://magento.stackexchange.com/questions/95/debugging-layout-xml-loading
    // http://stackoverflow.com/questions/6633307/understanding-magento-block-and-block-type
    // <!-- http://magento.stackexchange.com/questions/88045/how-to-update-admin-routers-of-custom-module-for-patch-supee-6788 -->
    // http://magento.stackexchange.com/questions/16704/customer-custom-tab-data-cant-save-in-admin
    // http://inchoo.net/magento/programatically-create-attribute-in-magento-useful-for-the-on-the-fly-import-system/
    // http://ampersandcommerce.com/assets/yousef-techmage14/#/7
    // http://stackoverflow.com/questions/33018141/how-to-get-url-of-admin-controller-method-in-magento?rq=1
    // http://fishpig.co.uk/magento/tutorials/direct-sql-queries/
    // https://wiki.magento.com/display/m1wiki/Using+Magento+1.x+collections
    // http://devdocs.magento.com/guides/m1x/magefordev/mage-for-dev-5.html
    // http://magento.stackexchange.com/questions/749/new-column-added-to-table-not-saving
    // http://magento.stackexchange.com/questions/10200/efficient-get-product-url-from-id
    // http://magebase.com/magento-tutorials/showing-dynamic-content-on-magento-product-pages-based-on-product-attributes/
    // http://magebase.com/magento-tutorials/creating-custom-layout-handles/
    // http://magento.stackexchange.com/questions/4905/programmatically-create-new-attribute-set-while-inheriting-from-another
    // http://blog.philwinkle.com/the-most-misunderstood-concept-in-magento/
    // http://magento.stackexchange.com/questions/15862/getting-correct-formkey
    // http://code.tutsplus.com/tutorials/adding-a-custom-product-type-in-magento--cms-21014
    // http://www.divisionlab.com/solvingmagento/product-typelogic-implementation-in-magento/
    // http://excellencemagentoblog.com/blog/2011/09/07/magento-eav-database-structure/
    // http://vinaikopp.com/2014/11/03/magento-setup-scripts/
    // http://stackoverflow.com/questions/1019076/how-to-search-by-key-value-in-a-multidimensional-array-in-php

// todo answer
// http://magento.stackexchange.com/questions/48707/get-product-attribute-value-for-dropdown-without-loading-the-whole-product
class Snowbotica_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
    //     /**
    //      * Instantiate our grid container block and add to the page content.
    //      * When accessing this admin index page, we will see a grid of all
    //      * brands currently available in our Magento instance, along with
    //      * a button to add a new one if we wish.
    //      */

    public function indexAction()
    {
        Mage::log('Controller was accessed', null, 'controller.log', true);

        Zend_Debug::dump($this->getLayout()->getUpdate());
        
        $this->getLayout();
        // $this->_addContent($this->getLayout()->createBlock('adminhtml/template')->setTemplate('snowbotica/landingpage/page-index.phtml'));
            // $canvasBlock = $this->getLayout()->createBlock('snowbotica_landingpage_adminhtml/canvas');
            // ->createBlock('sevendots_artboard_adminhtml/canvas');
        // $ty = Mage::helper('sevendots_artboard/math')->doWord();
        // echo $ty;

        // Add the grid container as the only item on this page
        $this->loadLayout()
            // ->_addContent($canvasBlock)
        ->renderLayout();
    }

}
