<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an AssetGroupSearchTheme data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgroupsearchtheme?view=bingads-13 AssetGroupSearchTheme Data Object
     * 
     * @used-by AssetGroup
     */
    final class AssetGroupSearchTheme
    {
        /**
         * The identifier of the search theme.
         * @var integer
         */
        public $Id;

        /**
         * The type of search theme.
         * @var string
         */
        public $SearchTheme;
    }

}
