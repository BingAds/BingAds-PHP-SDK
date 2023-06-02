<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a list of optional auction insight KPI properties that you can request when calling GetAuctionInsightData.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/auctioninsightkpiadditionalfield?view=bingads-13 AuctionInsightKpiAdditionalField Value Set
     * 
     * @used-by GetAuctionInsightDataRequest
     */
    final class AuctionInsightKpiAdditionalField
    {
        /** Request that the AbsoluteTopOfPageRate element be included within each returned AuctionInsightKpi object. */
        const AbsoluteTopOfPageRate = 'AbsoluteTopOfPageRate';
    }

}
