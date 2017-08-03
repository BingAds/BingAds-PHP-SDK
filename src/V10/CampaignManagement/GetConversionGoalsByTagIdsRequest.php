<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the conversion goals that use the specified UET tags.
     * @link http://msdn.microsoft.com/en-us/library/mt759541(v=msads.100).aspx GetConversionGoalsByTagIds Request Object
     * 
     * @uses ConversionGoalType
     * @used-by BingAdsCampaignManagementService::GetConversionGoalsByTagIds
     */
    final class GetConversionGoalsByTagIdsRequest
    {
        public $TagIds;
        public $ConversionGoalTypes;
    }
}
