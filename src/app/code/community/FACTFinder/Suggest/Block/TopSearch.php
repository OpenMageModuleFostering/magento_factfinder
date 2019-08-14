<?php
/**
 * FACTFinder_Suggest
 *
 * @category Mage
 * @package FACTFinder_Suggest
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2015 Flagbit GmbH & Co. KG
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link http://www.flagbit.de
 *
 */

/**
 * Block class
 *
 * @category Mage
 * @package FACTFinder_Suggest
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2015 Flagbit GmbH & Co. KG
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link http://www.flagbit.de
 */
class FACTFinder_Suggest_Block_TopSearch extends Mage_Core_Block_Template
{


    /**
     * Get suggect translatyion in json encoded format
     *
     * @return string
     */
    public function getTranslationsAsJson()
    {
        $channels = explode(';', Mage::getStoreConfig('factfinder/search/secondary_channels'));
        $result = new StdClass();

        foreach($channels as $channel) {
            $result->{'Channel: ' . $channel} = $this->__('Channel: ' . $channel);
        }

        $result->{'searchTerm'} = $this->__('ff_searchTerm');
        $result->{'category'} = $this->__('ff_category');
        $result->{'productName'} = $this->__('ff_productName');

        return json_encode($result);
    }


}
