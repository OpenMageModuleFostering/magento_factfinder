<?php
/**
 * FACTFinder_Core
 *
 * @category Mage
 * @package FACTFinder_Core
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2015 Flagbit GmbH & Co. KG
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link http://www.flagbit.de
 *
 */

/**
 * Backend for serialized array data
 *
 * @category Mage
 * @package FACTFinder_Core
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2015 Flagbit GmbH & Co. KG (http://www.flagbit.de)
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link http://www.flagbit.de
 */
class FACTFinder_Core_Model_System_Config_Backend_Attributes extends Mage_Core_Model_Config_Data
{


    /**
     * Process data after load
     * @return void
     */
    protected function _afterLoad()
    {
        $value = $this->getValue();
        $value = Mage::helper('factfinder/backend')->unserializeFieldValue($value);
        $this->setValue($value);
    }


    /**
     * Prepare data before save
     *
     * @return void
     */
    protected function _beforeSave()
    {
        $value = $this->getValue();
        $value = Mage::helper('factfinder/backend')->serializeFieldValue($value);
        $this->setValue($value);
    }


}
