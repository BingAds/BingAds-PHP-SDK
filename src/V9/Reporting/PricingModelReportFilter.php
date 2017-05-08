<?php
// Generated on 5/7/2017 5:45:54 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the pricing model values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/dn411635(v=msads.90).aspx PricingModelReportFilter Value Set
     * 
     * @used-by PublisherUsagePerformanceReportFilter
     */
    final class PricingModelReportFilter
    {
        /** The report will include ad groups with a cost per click (CPC) pricing model. */
        const Cpc = 'Cpc';

        /** The report will include ad groups with a cost per thousand impressions (CPM) pricing model. */
        const Cpm = 'Cpm';
    }

}
