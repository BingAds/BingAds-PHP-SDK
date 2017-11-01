<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a list of optional AdGroup properties that you can request when calling GetAdGroupsByCampaignId and GetAdGroupsByIds.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adgroupadditionalfield?view=bingads-11 AdGroupAdditionalField Value Set
     * 
     * @used-by GetAdGroupsByCampaignIdRequest
     * @used-by GetAdGroupsByIdsRequest
     */
    final class AdGroupAdditionalField
    {
        /** Includes the InheritedBidStrategyType element that can be nested within the BiddingScheme element of an AdGroup object. */
        const InheritedBidStrategyType = 'InheritedBidStrategyType';
    }

}
