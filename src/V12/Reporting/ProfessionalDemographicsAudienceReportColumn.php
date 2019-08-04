<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ProfessionalDemographicsAudienceReportRequest.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/professionaldemographicsaudiencereportcolumn?view=bingads-12 ProfessionalDemographicsAudienceReportColumn Value Set
     * 
     * @used-by ProfessionalDemographicsAudienceReportRequest
     */
    final class ProfessionalDemographicsAudienceReportColumn
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

        /** The name of the company (according to LinkedIn) of the person who viewed the ad. */
        const CompanyName = 'CompanyName';

        /** The name of the industry (according to LinkedIn) of the person who viewed the ad. */
        const IndustryName = 'IndustryName';

        /** The name of the job function (according to LinkedIn) of the person who viewed the ad. */
        const JobFunctionName = 'JobFunctionName';

        /** The network where you want your ads to show. */
        const AdDistribution = 'AdDistribution';

        /** The number of times an ad has been displayed on search results pages or other sites on the Audience Network. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The sum of your cost-per-click (CPC) charges for your ads and keywords. */
        const Spend = 'Spend';

        /** A conversion is a click that results in a sale or another measure of success. */
        const Conversions = 'Conversions';

        /** This is the language of the country the ad is served in. */
        const Language = 'Language';

        /** The number of times an entity (an account, campaign, ad group, or keyword, for example) contributed to a conversion that is associated with a different entity. */
        const Assists = 'Assists';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';
    }

}
