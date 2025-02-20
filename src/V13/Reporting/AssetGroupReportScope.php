<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a data object for AssetGroupReportScope.
     * @link https:/learn.microsoft.com/advertising/reporting-service/assetgroupreportscope?view=bingads-13 AssetGroupReportScope Data Object
     * 
     * @used-by AccountThroughAssetGroupReportScope
     */
    final class AssetGroupReportScope
    {
        /**
         * The ID of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The ID of the campaign.
         * @var integer
         */
        public $CampaignId;

        /**
         * The ID of the asset group.
         * @var integer
         */
        public $AssetGroupId;
    }

}
