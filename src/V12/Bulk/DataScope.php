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
        /** Download the entity attributes records. */
        const EntityData = 'EntityData';

        /** This value is not supported in Bing Ads API Version 12, and will be removed in a future version. */
        const EntityPerformanceData = 'EntityPerformanceData';

        /** Download the quality score fields for the corresponding entity records. */
        const QualityScoreData = 'QualityScoreData';

        /** Download the bid suggestions records. */
        const BidSuggestionsData = 'BidSuggestionsData';
    }

}
