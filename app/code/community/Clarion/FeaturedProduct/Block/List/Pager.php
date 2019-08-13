<?php
/**
 * Pager block
 * 
 * @category    Clarion
 * @package     Clarion_FeaturedProduct
 * @author      Clarion Magento Team <magento@clariontechnologies.co.in>
 * 
 */
class Clarion_FeaturedProduct_Block_List_Pager extends Mage_Page_Block_Html_Pager
{     
    protected function _construct()
    {
        parent::_construct();
        $this->setData('show_amounts', true);
        $this->setData('use_container', false);
        $this->setTemplate('clarion/featuredproduct/list/pager.phtml');
    }
}