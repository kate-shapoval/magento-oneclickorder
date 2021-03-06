<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    Smasoft
 * @package     Smasoft_Oneclikorder
 * @copyright   Copyright (c) 2013 Slabko Michail. <l.nagash@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Smasoft_Oneclickorder_Block_Adminhtml_Sales_Order_View extends Mage_Adminhtml_Block_Sales_Order_Abstract
{
    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->helper('smasoft_oneclickorder')->getPhoneNumberByOrder($this->getOrder()->getId());
    }

    protected function _toHtml()
    {
        if ($this->helper('smasoft_oneclickorder')->isDisplayPhoneInSalesOrders() && $this->getPhoneNumber()) {
            return parent::_toHtml();
        }
        return '';
    }
}