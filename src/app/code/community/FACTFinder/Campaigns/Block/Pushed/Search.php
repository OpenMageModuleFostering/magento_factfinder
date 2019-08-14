<?php
/**
 * FACTFinder_Campaigns
 *
 * @category Mage
 * @package FACTFinder_Campaigns
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2015, Flagbit GmbH & Co. KG
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link http://www.flagbit.de
 */

/**
 * Class FACTFinder_Campaigns_Block_Search_Pushed
 *
 * @category Mage
 * @package FACTFinder_Campaigns
 * @author Flagbit Magento Team <magento@flagbit.de>
 * @copyright Copyright (c) 2015, Flagbit GmbH & Co. KG
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link http://www.flagbit.de
 */
class FACTFinder_Campaigns_Block_Pushed_Search extends FACTFinder_Campaigns_Block_Pushed_Abstract
{

    protected $_handlerModel = 'factfinder_campaigns/handler_search';


    /**
     * Check if campaigns can be shown
     *
     * @return bool
     */
    protected function _canBeShown()
    {
        if (Mage::registry('current_category')
            && !Mage::helper('factfinder_campaigns')->isCatalogNavigationReplaced()
        ) {
            return false;
        }

        return parent::_canBeShown();
    }


}