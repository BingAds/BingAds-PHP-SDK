<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets the negative site URLs directly to ad groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setnegativesitestoadgroups?view=bingads-13 SetNegativeSitesToAdGroups Request Object
     * 
     * @uses AdGroupNegativeSites
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
     */
    final class SetNegativeSitesToAdGroupsRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array of AdGroupNegativeSites objects that identify the ad groups to update with the specified negative site URLs.
         * @var AdGroupNegativeSites[]
         */
        public $AdGroupNegativeSites;
    }
}
