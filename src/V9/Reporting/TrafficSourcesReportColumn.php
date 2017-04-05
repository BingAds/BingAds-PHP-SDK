<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the TrafficSourcesReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/gg262847(v=msads.90).aspx TrafficSourcesReportColumn Value Set
     * 
     * @used-by TrafficSourcesReportRequest
     */
    final class TrafficSourcesReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The origin of the advertising traffic, which is one of the following:Bing and Yahoo Search PropertiesExtended Network Search PropertiesNote: If the user is coming from a syndicated search website, the value will be the domain name of the syndicated website. */
        const Source = 'Source';

        /** The name of your event tracking or campaign analytics goal. */
        const Goal = 'Goal';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step1Count = 'Step1Count';

        /** The number of times that a user entered step 2 of the funnel. */
        const Step2Count = 'Step2Count';

        /** The number of times that a user entered step 3 of the funnel. */
        const Step3Count = 'Step3Count';

        /** The number of times that a user entered step 4 of the funnel. */
        const Step4Count = 'Step4Count';

        /** The number of times that a user entered step 5 of the funnel. */
        const Step5Count = 'Step5Count';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The funnel conversion rate is the percent of conversions completed by users who at minimum visited the webpage corresponding to step 1 of your goal. */
        const FunnelConversionRate = 'FunnelConversionRate';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The account lifecycle status. */
        const AccountStatus = 'AccountStatus';
    }

}
