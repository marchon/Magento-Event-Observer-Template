<?php
class Company_Observer_Model_Observer extends Mage_Core_Model_Abstract
{
    public function someFunction($observer)
    {
    	// Make sure you have logging turned on
    	// Admin Panel > System > Configuration > Developer > Log Settings > Enabled = Yes
    	
    	Mage::log('Made it here',null,'custom-log.log');
    	
    	// look in /var/log/custom-log.log to find if it worked
    	
    }
}
?>