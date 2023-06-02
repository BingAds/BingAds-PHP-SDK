<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more ads from the specified ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteads?view=bingads-13 DeleteAds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAds
     */
    final class DeleteAdsRequest
    {
        /**
         * The ID of the ad group that contains the ads to delete.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The IDs of the ads to delete.
         * @var integer[]
         */
        public $AdIds;
    }
}
