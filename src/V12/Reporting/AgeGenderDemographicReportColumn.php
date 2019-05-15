<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AgeGenderDemographicReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/agegenderdemographicreportcolumn?view=bingads-12 AgeGenderDemographicReportColumn Value Set
     * 
     * @used-by AgeGenderDemographicReportRequest
     */
    final class AgeGenderDemographicReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The network where you want your ads to show. */
        const AdDistribution = 'AdDistribution';

        /** The age group of the audience who viewed the ad. */
        const AgeGroup = 'AgeGroup';

        /** The gender of the audience who might have viewed the ad, if known. */
        const Gender = 'Gender';

        /** The estimated number of impressions, or the number of times an ad could be served to a particular age group or gender, divided by the total number of estimated impressions across the ad group (including estimated impressions for unknown age and gender demographics). */
        const EstimatedImpressionPercent = 'EstimatedImpressionPercent';

        /** The estimated number of times that an ad could be clicked by a particular age group or gender, divided by the total number of estimated clicks across the ad group (including estimated clicks for unknown age and gender demographics). */
        const EstimatedClickPercent = 'EstimatedClickPercent';

        /** The estimated click-through rate (Ctr) as a percentage. */
        const EstimatedCtr = 'EstimatedCtr';

        /** The language of the country the ad is served in. */
        const Language = 'Language';

        /** The estimated number of times an ad could be served to a particular age group or gender. */
        const EstimatedImpressions = 'EstimatedImpressions';

        /** The estimated number of times that an ad could be clicked by a particular age group or gender. */
        const EstimatedClicks = 'EstimatedClicks';

        /** The estimated number of conversions, which are the clicks that results in a sale or another measure of success, to a particular age group or gender. */
        const EstimatedConversions = 'EstimatedConversions';

        /** The estimated number of the conversions that results in a sale or another measure of success to a particular age group or gender, divided by the estimated number of clicks by a particular age group or gender. */
        const EstimatedConversionRate = 'EstimatedConversionRate';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';
    }

}
