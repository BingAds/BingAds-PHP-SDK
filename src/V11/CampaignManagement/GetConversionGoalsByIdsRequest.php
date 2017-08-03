<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified conversion goals.
     * @link http://msdn.microsoft.com/en-us/library/mt759540(v=msads.110).aspx GetConversionGoalsByIds Request Object
     * 
     * @uses ConversionGoalType
     * @used-by BingAdsCampaignManagementService::GetConversionGoalsByIds
     */
    final class GetConversionGoalsByIdsRequest
    {
        public $ConversionGoalIds;
        public $ConversionGoalTypes;
    }
}
