<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the CategoryInsightsReportColumn.
     * @link https:/learn.microsoft.com/advertising/reporting-service/categoryinsightsreportcolumn?view=bingads-13 CategoryInsightsReportColumn Value Set
     * 
     * @used-by CategoryInsightsReportRequest
     */
    final class CategoryInsightsReportColumn
    {
        /** A particular supply sector, such as Travel and Tourism or Apparel. */
        const L1Vertical = 'L1Vertical';

        /** A more detailed segment of an L1 vertical. */
        const L2Vertical = 'L2Vertical';

        /** The most specific segment within a larger L1 vertical. */
        const L3Vertical = 'L3Vertical';

        /** The date range for the week that your data is from starting with Monday. */
        const WeekStartingMonday = 'WeekStartingMonday';

        /** The change in search volume from last week to this week. */
        const WoWSearches = 'WoWSearches';

        /** The change in search volume from the last four-week period to the current four-week period. */
        const MoMSearches = 'MoMSearches';

        /** The change in search volume between this week and the same week last year. */
        const YoYLast1WeekSearches = 'YoYLast1WeekSearches';

        /** The change in search volume between the current four weeks and the same four-week period last year. */
        const YoYLast4WeeksSearches = 'YoYLast4WeeksSearches';

        /** The number of indexed searches. */
        const SearchesIndexed = 'SearchesIndexed';

        /** Peak week represents the week with the highest search volume within your selected date range. */
        const SearchesPeakWeek = 'SearchesPeakWeek';

        /** The change in click volume from last week to this week. */
        const WoWClicks = 'WoWClicks';

        /** The change in click volume from the last four-week period to the current four-week period. */
        const MoMClicks = 'MoMClicks';

        /** The change in click volume between this week and the same week last year. */
        const YoYLast1WeekClicks = 'YoYLast1WeekClicks';

        /** The number of indexed clicks. */
        const ClicksIndexed = 'ClicksIndexed';

        /** Peak week represents the week with the highest click volume within your selected date range. */
        const ClicksPeakWeek = 'ClicksPeakWeek';

        /** The change in click volume between the current four weeks and the same four-week period last year. */
        const YoYLast4WeeksClicks = 'YoYLast4WeeksClicks';

        /** The country-specific Bing marketplace, such as Bing France or Bing India. */
        const Country = 'Country';
    }

}
