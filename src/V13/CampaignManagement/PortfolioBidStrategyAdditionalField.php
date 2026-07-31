<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Additional fields for the portfolio bid strategy object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/portfoliobidstrategyadditionalfield?view=bingads-13 PortfolioBidStrategyAdditionalField Value Set
     * 
     * @used-by GetBidStrategiesByIdsRequest
     */
    final class PortfolioBidStrategyAdditionalField
    {
        /** Inlcude the MaxCpc element within each returned MaxConversionValueBiddingScheme object. */
        const MaxConversionValueWithMaxCpc = 'MaxConversionValueWithMaxCpc';

        /** Reserved. */
        const Scope = 'Scope';

        /** Reserved. */
        const CurrencyCode = 'CurrencyCode';

        /** Reserved. */
        const ReportingTimeZone = 'ReportingTimeZone';
    }

}
