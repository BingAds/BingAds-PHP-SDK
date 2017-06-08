<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a campaign.
     * @link http://msdn.microsoft.com/en-us/library/bb672054(v=msads.100).aspx Campaign Data Object
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
         * The bid strategy type for how you want to manage your bids.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * The budget type determines whether the campaign uses a daily budget or a monthly budget, and how the budget is spent.
         * @var BudgetLimitType
         */
        public $BudgetType;

        /**
         * The amount to spend daily on the campaign.
         * @var double
         */
        public $DailyBudget;

        /**
         * Determines whether daylight-saving time is enabled.
         * @var boolean
         */
        public $DaylightSaving;

        /**
         * The description of the campaign.
         * @var string
         */
        public $Description;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier of the campaign.
         * @var integer
         */
        public $Id;

        /**
         * The monthly budget of the campaign.
         * @var double
         */
        public $MonthlyBudget;

        /**
         * The name of the campaign.
         * @var string
         */
        public $Name;

        /**
         * The percent amount by which to adjust your bid for native ads above or below the base ad group or keyword bid.
         * @var integer
         */
        public $NativeBidAdjustment;

        /**
         * The status of the campaign.
         * @var CampaignStatus
         */
        public $Status;

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
         * The campaign type determines whether the campaign is a Bing Shopping campaign, Dynamic Search Ads campaign, or Search &amp; Content campaign.
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
         * The languages of the ads and keywords in the campaign.
         * @var string[]
         */
        public $Languages;
    }

}
