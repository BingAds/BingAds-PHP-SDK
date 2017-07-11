<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.110).aspx GetAdsByEditorialStatus Request Object
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
         * The editorial review status that the ads must have to be returned.
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
