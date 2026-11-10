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

        /** Request that the scope be included within each returned portfolio bid strategy. */
        const Scope = 'Scope';

        /** Request that the currency code be included within each returned portfolio bid strategy. */
        const CurrencyCode = 'CurrencyCode';

        /** Request that the reporting time zone be included within each returned portfolio bid strategy. */
        const ReportingTimeZone = 'ReportingTimeZone';
    }

}
