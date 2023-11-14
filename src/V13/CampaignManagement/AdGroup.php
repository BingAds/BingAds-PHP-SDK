<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an ad group in an advertising campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adgroup?view=bingads-13 AdGroup Data Object
     * 
     * @uses AdRotation
     * @uses BiddingScheme
     * @uses RateBid
     * @uses Bid
     * @uses Date
     * @uses KeyValuePairOfstringstring
     * @uses FrequencyCapSettings
     * @uses Network
     * @uses AdGroupPrivacyStatus
     * @uses Setting
     * @uses AdGroupStatus
     * @uses CustomParameters
     * @used-by AddAdGroupsRequest
     * @used-by GetAdGroupsByCampaignIdResponse
     * @used-by GetAdGroupsByIdsResponse
     * @used-by UpdateAdGroupsRequest
     */
    final class AdGroup
    {
        /**
         * Ad rotation sets how often Microsoft Advertising selects which ads to serve, if you have multiple ads within an ad group.
         * @var AdRotation
         */
        public $AdRotation;

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
         * Reserved.
         * @var RateBid
         */
        public $CommissionRate;

        /**
         * The default bid to use when the user's query and the ad group's keywords match by using either a broad, exact, or phrase match comparison.
         * @var Bid
         */
        public $CpcBid;

        /**
         * The date that the ads in the ad group will expire.
         * @var Date
         */
        public $EndDate;

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
         * Settings for the frequency cap.
         * @var FrequencyCapSettings[]
         */
        public $FrequencyCapSettings;

        /**
         * The system-generated identifier of the ad group.
         * @var integer
         */
        public $Id;

        /**
         * Your ad language setting determines the language you will use when you write your ads and should be the language of your customers.
         * @var string
         */
        public $Language;

        /**
         * Reserved.
         * @var integer
         */
        public $MultimediaAdsBidAdjustment;

        /**
         * The name of the ad group.
         * @var string
         */
        public $Name;

        /**
         * The search networks where you want your ads to display.
         * @var Network
         */
        public $Network;

        /**
         * Reserved.
         * @var RateBid
         */
        public $PercentCpcBid;

        /**
         * Indicates whether or not your ad group target criteria e.g., ProfileCriterion are too narrow for ad groups in Audience campaigns.
         * @var AdGroupPrivacyStatus
         */
        public $PrivacyStatus;

        /**
         * The ad group settings that typically vary by campaign type.
         * @var Setting[]
         */
        public $Settings;

        /**
         * The date that the ads in the ad group can begin serving; otherwise, the service can begin serving the ads in the ad group the day that the ad group becomes active.
         * @var Date
         */
        public $StartDate;

        /**
         * The status of the ad group.
         * @var AdGroupStatus
         */
        public $Status;

        /**
         * The tracking template to use as a default for all URLs in your ad group.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;

        /**
         * This will be deprecated.
         * @var boolean
         */
        public $UseOptimizedTargeting;

        /**
         * Indicates if predictive targeting is enabled for an AdGroup.
         * @var boolean
         */
        public $UsePredictiveTargeting;

        /**
         * Determines whether to use the account time zone or the time zone of the search user where the ads could be delivered.
         * @var boolean
         */
        public $AdScheduleUseSearcherTimeZone;

        /**
         * The ad group type.
         * @var string
         */
        public $AdGroupType;

        /**
         * Reserved.
         * @var Bid
         */
        public $CpvBid;

        /**
         * Reserved.
         * @var Bid
         */
        public $CpmBid;

        /**
         * Reserved.
         * @var Bid
         */
        public $McpaBid;
    }

}
