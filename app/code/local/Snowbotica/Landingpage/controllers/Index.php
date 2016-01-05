<?php

class Snowbotica_Landingpage_IndexController extends Mage_Core_Controller_Front_Action
{

	public function indexAction(){

		var_dump('api router set up');

	}

	private function _returnJson($data){
        $jsonData = json_encode($data);
        $this->getResponse()->setHeader('Content-type', 'application/json');
        $this->getResponse()->setBody($jsonData);
    }

}

