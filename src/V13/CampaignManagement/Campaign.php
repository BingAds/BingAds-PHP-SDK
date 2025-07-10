<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaign?view=bingads-13 Campaign Data Object
     * 
     * @uses BiddingScheme
     * @uses BudgetLimitType
     * @uses KeyValuePairOfstringstring
     * @uses CampaignStatus
     * @uses CustomParameters
     * @uses CampaignType
     * @uses Setting
     * @used-by AddCampaignsRequest
     * @used-by GetCampaignsByAccountIdResponse
     * @used-by GetCampaignsByIdsResponse
     * @used-by UpdateCampaignsRequest
     */
    final class Campaign
    {
        /**
         * The percent amount by which to adjust your bid for audience ads above or below the base ad group or keyword bid.
         * @var integer
         */
        public $AudienceAdsBidAdjustment;

        /**
         * The bid strategy type for how you want to manage your bids.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * The budget type determines how the budget is spent.
         * @var BudgetLimitType
         */
        public $BudgetType;

        /**
         * The amount to spend daily on the campaign.
         * @var double
         */
        public $DailyBudget;

        /**
         * A list of unique system identifiers corresponding to the deals that were added.
         * @var integer[]
         */
        public $DealIds;

        /**
         * The date when you want your campaign to stop serving.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * The system-generated identifier of the Experiment.
         * @var integer
         */
        public $ExperimentId;

        /**
         * The final URL suffix can include tracking parameters that will be appended to the end of your landing page URL.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * A list of goal IDs.
         * @var integer[]
         */
        public $GoalIds;

        /**
         * The unique Microsoft Advertising identifier of the campaign.
         * @var integer
         */
        public $Id;

        /**
         * The campaign is a deal campaign if true.
         * @var boolean
         */
        public $IsDealCampaign;

        /**
         * The percent amount by which to adjust your bid for multimedia ads above or below the base ad group or keyword bid
         * @var integer
         */
        public $MultimediaAdsBidAdjustment;

        /**
         * The name of the campaign.
         * @var string
         */
        public $Name;

        /**
         * The date when you want your campaign to begin serving.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The status of the campaign.
         * @var CampaignStatus
         */
        public $Status;

        /**
         * The campaign sub type.
         * @var string
         */
        public $SubType;

        /**
         * This column is deprecated.
         * @var string
         */
        public $TimeZone;

        /**
         * The tracking template to use as a default for all URLs in your campaign.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;

        /**
         * Determines whether the dates should be managed at the campaign level or the ad group level.
         * @var boolean
         */
        public $UseCampaignLevelDates;

        /**
         * The campaign type determines whether the campaign is an Audience, Dynamic Search Ads, Search, Shopping campaign, Hotel Ads, or Performance Max.
         * @var CampaignType
         */
        public $CampaignType;

        /**
         * The supported settings that vary by campaign type.
         * @var Setting[]
         */
        public $Settings;

        /**
         * The unique Microsoft Advertising identifier of the Budget that this campaign shares with other campaigns in the account.
         * @var integer
         */
        public $BudgetId;

        /**
         * Your ad language setting determines the language you will use when you write your ads and should be the language of your customers.
         * @var string[]
         */
        public $Languages;

        /**
         * Determines whether to use the account time zone or the time zone of the search user where the ads could be delivered.
         * @var boolean
         */
        public $AdScheduleUseSearcherTimeZone;

        /**
         * The system-generated identifier of the BidStrategy that this campaign shares with other campaigns in the account.
         * @var integer
         */
        public $BidStrategyId;
    }

}
