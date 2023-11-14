<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional campaign properties that you can request when calling GetCampaignsByAccountId and GetCampaignsByIds.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaignadditionalfield?view=bingads-13 CampaignAdditionalField Value Set
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

        /** Request that the BidStrategyId element be included within each returned Campaign object. */
        const BidStrategyId = 'BidStrategyId';

        /** Request that the ManualCpmBiddingScheme or ManualCpvBiddingScheme object be returned within the BiddingScheme element of each returned Campaign object. */
        const CpvCpmBiddingScheme = 'CpvCpmBiddingScheme';

        /** Request that the DynamicFeedSetting object be returned within the Settings element of each returned Campaign object. */
        const DynamicFeedSetting = 'DynamicFeedSetting';

        /** Request that the MultimediaAdsBidAdjustment element be included within each returned Campaign object. */
        const MultimediaAdsBidAdjustment = 'MultimediaAdsBidAdjustment';

        /** Request that the VerifiedTrackingSetting object be returned within the Settings element of each returned Campaign object. */
        const VerifiedTrackingSetting = 'VerifiedTrackingSetting';

        /** Reserved. */
        const DynamicDescriptionSetting = 'DynamicDescriptionSetting';

        /** Reserved. */
        const DisclaimerSetting = 'DisclaimerSetting';

        /** Reserved. */
        const CampaignConversionGoal = 'CampaignConversionGoal';

        /** Reserved. */
        const TargetCpaInMaxConversion = 'TargetCpaInMaxConversion';

        /** Reserved. */
        const ResponsiveSearchAdsSetting = 'ResponsiveSearchAdsSetting';

        /** Request that the CostPerSaleBiddingScheme object be returned within the BiddingScheme element of each returned Campaign object. */
        const CostPerSaleBiddingScheme = 'CostPerSaleBiddingScheme';

        /** Reserved. */
        const ShoppingSettingShoppableAdsEnabled = 'ShoppingSettingShoppableAdsEnabled';

        /** Reserved. */
        const ShoppingSettingFeedLabel = 'ShoppingSettingFeedLabel';

        /** Reserved. */
        const CallToActionSetting = 'CallToActionSetting';

        /** Reserved. */
        const PageFeedInPerformanceMaxSettings = 'PageFeedInPerformanceMaxSettings';
    }

}
