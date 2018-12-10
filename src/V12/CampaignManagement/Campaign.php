<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/campaign?view=bingads-12 Campaign Data Object
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
         * The description of the campaign.
         * @var string
         */
        public $Description;

        /**
         * The system generated identifier of the Experiment.
         * @var integer
         */
        public $ExperimentId;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier of the campaign.
         * @var integer
         */
        public $Id;

        /**
         * The name of the campaign.
         * @var string
         */
        public $Name;

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
         * The time zone where the campaign operates.
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
         * The campaign type determines whether the campaign is an Audience, Dynamic Search Ads, Search, or Shopping campaign.
         * @var CampaignType
         */
        public $CampaignType;

        /**
         * The settings will vary by campaign type.
         * @var Setting[]
         */
        public $Settings;

        /**
         * The unique Bing Ads identifier of the Budget that this campaign shares with other campaigns in the account.
         * @var integer
         */
        public $BudgetId;

        /**
         * Your ad language setting determines the language you will use when you write your ads and should be the language of your customers.
         * @var string[]
         */
        public $Languages;
    }

}
