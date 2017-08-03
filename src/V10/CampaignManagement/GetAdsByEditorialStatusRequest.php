<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.100).aspx GetAdsByEditorialStatus Request Object
     * 
     * @uses AdEditorialStatus
     * @uses AdType
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusRequest
    {
        /**
         * The identifier of the ad group to retrieve the ads from.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The AdEditorialStatus value that specifies the review status that the ads must have to be returned.
         * @var AdEditorialStatus
         */
        public $EditorialStatus;

        /**
         * One or more types of ads to return.
         * @var AdType[]
         */
        public $AdTypes;
    }
}
