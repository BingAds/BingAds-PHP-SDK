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
        /** Request that the InheritedBidStrategyType element be included within each returned InheritFromParentBiddingScheme object (nested within the BiddingScheme element of an AdGroup). */
        const InheritedBidStrategyType = 'InheritedBidStrategyType';

        /** Reserved. */
        const PrivacyStatus = 'PrivacyStatus';

        /** Reserved. */
        const TargetSetting = 'TargetSetting';
    }

}
