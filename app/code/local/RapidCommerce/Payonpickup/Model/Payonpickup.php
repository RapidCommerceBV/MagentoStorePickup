<?php
class RapidCommerce_Payonpickup_Model_Payonpickup extends Mage_Payment_Model_Method_Abstract
{
 
	protected $_code = 'payonpickup';
	
    public function isAvailable($quote = null)
    {
		$showBase = parent::isAvailable($quote);
		$configuredMethod = Mage::getStoreConfig('payment/payonpickup/shippingmethod_method');
		
        return ($showBase && $quote && $configuredMethod && ($quote->getShippingAddress()) && ($quote->getShippingAddress()->getShippingMethod()) 
			&& ($quote->getShippingAddress()->getShippingMethod() == $configuredMethod)); // Check if the specified method is available
    }
}