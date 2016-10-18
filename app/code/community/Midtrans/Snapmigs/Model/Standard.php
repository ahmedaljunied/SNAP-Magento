<?php
/**
 * Veritrans VT Web Model Standard
 *
 * @category   Mage
 * @package    Mage_Midtrans_Snap_Model_Standard
 * @author     Kisman Hong, plihplih.com
 * this class is used after placing order, if the payment is Veritrans, this class will be called and link to redirectAction at Veritrans_Vtweb_PaymentController class
 */
class Midtrans_Snapmigs_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'snapmigs';
	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	protected $_formBlockType = 'snapmigs/form';
  	protected $_infoBlockType = 'snapmigs/info';
	
	// call to redirectAction function at Veritrans_Vtweb_PaymentController
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('snapmigs/payment/redirect', array('_secure' => true));
	}
}
?>