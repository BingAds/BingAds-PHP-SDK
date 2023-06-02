<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Defines an object that identifies a campaign to download.
     * @link https:/learn.microsoft.com/advertising/bulk-service/campaignscope?view=bingads-13 CampaignScope Data Object
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
