<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Sets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.100).aspx SetNegativeSitesToAdGroups Request Object
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
