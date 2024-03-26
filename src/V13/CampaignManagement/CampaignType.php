<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible campaign types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaigntype?view=bingads-13 CampaignType Value Set
     * 
     * @used-by BidStrategy
     * @used-by Campaign
     * @used-by DataExclusion
     * @used-by SeasonalityAdjustment
     * @used-by GetCampaignsByAccountIdRequest
     * @used-by GetCampaignsByIdsRequest
     */
    final class CampaignType
    {
        /** The campaign is a Search campaign. */
        const Search = 'Search';

        /** The campaign is a Microsoft Shopping campaign. */
        const Shopping = 'Shopping';

        /** The campaign is a Dynamic Search Ads campaign. */
        const DynamicSearchAds = 'DynamicSearchAds';

        /** The campaign is an Audience campaign. */
        const Audience = 'Audience';

        /** The campaign is a Lodging campaign (formerly hotel campaigns). */
        const Hotel = 'Hotel';

        /** The campaign is a Performance max campaign. */
        const PerformanceMax = 'PerformanceMax';
    }

}
