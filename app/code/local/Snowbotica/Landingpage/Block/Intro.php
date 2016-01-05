<?php  
class Snowbotica_Landingpage_Block_Intro extends Mage_Core_Block_Template  
{

	// We need this to load the js conditionally as magento core functionality does not include this method at the block level
 //    public function addItem($type, $path)
	// {
	//     $head = $this->getLayout()->getBlock('head');

	//     if($type == 'css')
	//     {
	// 		return $head->addCss($path); 
	//     }
	//     if($type == 'js')
	//     {
	//     	// var_dump($path);die;
	// 		return $head->addJs($path);
	//     }
	// }

}