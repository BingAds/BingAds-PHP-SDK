<?php

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Defines the scope or types of data to download.
     * @link http://msdn.microsoft.com/en-us/library/dn249976(v=msads.110).aspx DataScope Value Set
     * 
     * @used-by DownloadCampaignsByAccountIdsRequest
     * @used-by DownloadCampaignsByCampaignIdsRequest
     */
    final class DataScope
    {
        /** Download the entity attributes records. */
        const EntityData = 'EntityData';

        /** Download the performance data fields for the corresponding entity records. */
        const EntityPerformanceData = 'EntityPerformanceData';

        /** Download the quality score fields for the corresponding entity records. */
        const QualityScoreData = 'QualityScoreData';

        /** Download the bid suggestions records. */
        const BidSuggestionsData = 'BidSuggestionsData';
    }

}
