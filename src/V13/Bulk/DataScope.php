<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Defines the scope or types of data to download.
     * @link https:/learn.microsoft.com/advertising/bulk-service/datascope?view=bingads-13 DataScope Value Set
     * 
     * @used-by DownloadCampaignsByAccountIdsRequest
     * @used-by DownloadCampaignsByCampaignIdsRequest
     */
    final class DataScope
    {
        /** Download entity records e.g., campaigns and ad groups. */
        const EntityData = 'EntityData';

        /** Download the quality score fields i.e., Quality Score, Keyword Relevance, Landing Page Relevance, and Landing Page User Experience in the Ad Group, Campaign, and Keyword records. */
        const QualityScoreData = 'QualityScoreData';

        /** Download the keyword bid suggestion records. */
        const BidSuggestionsData = 'BidSuggestionsData';
    }

}
