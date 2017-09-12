<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an ad group.
     * @link http://msdn.microsoft.com/en-us/library/bb671956(v=msads.110).aspx AdGroup Data Object
     * 
     * @uses AdDistribution
     * @uses AdRotation
     * @uses BiddingScheme
     * @uses Bid
     * @uses Date
     * @uses KeyValuePairOfstringstring
     * @uses Network
     * @uses PricingModel
     * @uses RemarketingTargetingSetting
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
         * Determines whether the ads within this ad group will be displayed on the content distribution channel, search distribution channel, or both.
         * @var AdDistribution
         */
        public $AdDistribution;

        /**
         * Determines how often you'd like the ads in your ad group to show in relation to one another.
         * @var AdRotation
         */
        public $AdRotation;

        /**
         * The bid strategy type for how you want to manage your bids.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * The bid to use when the keywords that the service extracts from the content page and the ad group's keywords match by using an exact match comparison.
         * @var Bid
         */
        public $ContentMatchBid;

        /**
         * The date that the ads in the ad group will expire.
         * @var Date
         */
        public $EndDate;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system generated identifier of the ad group.
         * @var integer
         */
        public $Id;

        /**
         * The language of the ads and keywords in the ad group.
         * @var string
         */
        public $Language;

        /**
         * The name of the ad group.
         * @var string
         */
        public $Name;

        /**
         * The percent amount by which to adjust your bid for native ads above or below the base ad group or keyword bid.
         * @var integer
         */
        public $NativeBidAdjustment;

        /**
         * The search networks where you want your ads to display.
         * @var Network
         */
        public $Network;

        /**
         * The only supported pricing model in Bing Ads is based on cost per click (CPC).
         * @var PricingModel
         */
        public $PricingModel;

        /**
         * The targeting setting that is applicable for all audiences e.g., custom audiences and remarketing lists that are associated with this ad group.
         * @var RemarketingTargetingSetting
         */
        public $RemarketingTargetingSetting;

        /**
         * The default bid to use when the user's query and the ad group's keywords match by using either a broad, exact, or phrase match comparison.
         * @var Bid
         */
        public $SearchBid;

        /**
         * Reserved for future use.
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
    }

}
