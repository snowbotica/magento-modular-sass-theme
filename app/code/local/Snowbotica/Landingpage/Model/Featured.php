<?php

class Snowbotica_Landingpage_Featured extends Mage_Core_Model_Abstract 
{
    // protected function _construct()
    // {
    //     $this->_init('artboard/materials');
    // }   

    // /*
    // * Returns all Materials as JSON 
    // */
    // public function materialReadAllACtion(){

    //     $params    = $this->getRequest()->getParams();
    //     $materials = Mage::getModel('artboard/materials')->getCollection();
        
    //     $result = $materials->getData();
        
    //     return $result;
    // }

    //     /**
    //  * This method is used in the grid and form for populating the dropdown.
    //  */
    // public function getAvailableVisibilies()
    // {
    //     return array(
    //         self::VISIBILITY_HIDDEN
    //             => Mage::helper('snowbotica_landingpage')
    //                    ->__('Hidden'),
    //         self::VISIBILITY_DIRECTORY
    //             => Mage::helper('snowbotica_landingpage')
    //                    ->__('Visible in Directory'),
    //     );
    // }

    // protected function _beforeSave()
    // {
    //     parent::_beforeSave();

    //     /**
    //      * Perform some actions just before a brand is saved.
    //      */
    //     $this->_updateTimestamps();
    //     $this->_prepareUrlKey();

    //     return $this;
    // }

    // protected function _updateTimestamps()
    // {
    //     $timestamp = now();

    //     /**
    //      * Set the last updated timestamp.
    //      */
    //     $this->setUpdatedAt($timestamp);

    //     /**
    //      * If we have a brand new object, set the created timestamp.
    //      */
    //     if ($this->isObjectNew()) {
    //         $this->setCreatedAt($timestamp);
    //     }

    //     return $this;
    // }

    // protected function _prepareUrlKey()
    // {
    //     /**
    //      * In this method, you might consider ensuring
    //      * that the URL Key entered is unique and
    //      * contains only alphanumeric characters.
    //      */

    //     return $this;
    // }
}