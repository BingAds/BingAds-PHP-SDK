<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the ad groups within the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.110).aspx GetAdGroupsByCampaignId Request Object
     * 
     * @uses AdGroupAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
     */
    final class GetAdGroupsByCampaignIdRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * The list of additional properties that you want included within each returned AdGroup object.
         * @var AdGroupAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
