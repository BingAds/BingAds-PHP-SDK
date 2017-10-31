<?php

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Defines an object that identifies a campaign to download.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/campaignscope?view=bingads-11 CampaignScope Data Object
     * 
     * @used-by DownloadCampaignsByCampaignIdsRequest
     */
    final class CampaignScope
    {
        /**
         * The identifier of the campaign to download.
         * @var integer
         */
        public $CampaignId;

        /**
         * The identifier of the account that owns the campaign to download.
         * @var integer
         */
        public $ParentAccountId;
    }

}
