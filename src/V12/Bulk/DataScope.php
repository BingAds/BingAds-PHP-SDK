<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * Defines the scope or types of data to download.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/datascope?view=bingads-12 DataScope Value Set
     * 
     * @used-by DownloadCampaignsByAccountIdsRequest
     * @used-by DownloadCampaignsByCampaignIdsRequest
     */
    final class DataScope
    {
        /** Download entity records e.g., campaigns and ad groups. */
        const EntityData = 'EntityData';

        /** This value is not supported in Bing Ads API Version 12, and will be removed in a future version. */
        const EntityPerformanceData = 'EntityPerformanceData';

        /** Download the quality score fields i.e., Quality Score, Keyword Relevance, Landing Page Relevance, and Landing Page User Experience in the Ad Group, Campaign, and Keyword records. */
        const QualityScoreData = 'QualityScoreData';

        /** Download the keyword bid suggestion records. */
        const BidSuggestionsData = 'BidSuggestionsData';
    }

}
