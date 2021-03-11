<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional campaign properties that you can request when calling GetCampaignsByAccountId and GetCampaignsByIds.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/campaignadditionalfield?view=bingads-13 CampaignAdditionalField Value Set
     * 
     * @used-by GetCampaignsByAccountIdRequest
     * @used-by GetCampaignsByIdsRequest
     */
    final class CampaignAdditionalField
    {
        /** Request that the AdScheduleUseSearcherTimeZone element be included within each returned Campaign object. */
        const AdScheduleUseSearcherTimeZone = 'AdScheduleUseSearcherTimeZone';

        /** Request that the MaxConversionValueBiddingScheme object be returned within the BiddingScheme element of each returned Campaign object. */
        const MaxConversionValueBiddingScheme = 'MaxConversionValueBiddingScheme';

        /** Request that the TargetImpressionShareBiddingScheme object be returned within the BiddingScheme element of each returned Campaign object. */
        const TargetImpressionShareBiddingScheme = 'TargetImpressionShareBiddingScheme';

        /** Request that the TargetSetting object be returned within the Settings element of each returned Campaign object. */
        const TargetSetting = 'TargetSetting';

        /** Reserved. */
        const BidStrategyId = 'BidStrategyId';

        /** Reserved. */
        const CpvCpmBiddingScheme = 'CpvCpmBiddingScheme';

        /** Reserved. */
        const DynamicFeedSetting = 'DynamicFeedSetting';
    }

}
