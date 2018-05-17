<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base object of an audience.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/audience?view=bingads-11 Audience Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @uses EntityScope
     * @uses AudienceType
     * @used-by AddAudiencesRequest
     * @used-by GetAudiencesByIdsResponse
     * @used-by UpdateAudiencesRequest
     */
    class Audience
    {
        /**
         * The total number of people who belong to this audience in the Audience network i.
         * @var integer
         */
        public $AudienceNetworkSize;

        /**
         * The description of the audience.
         * @var string
         */
        public $Description;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The Bing Ads identifier of the audience.
         * @var integer
         */
        public $Id;

        /**
         * When you create an audience, you can specify how far back in time Bing Ads should look for actions that match your audience definition.
         * @var integer
         */
        public $MembershipDuration;

        /**
         * The name of the audience.
         * @var string
         */
        public $Name;

        /**
         * The Bing Ads identifier of the account or customer.
         * @var integer
         */
        public $ParentId;

        /**
         * Scope defines what accounts can use this audience.
         * @var EntityScope
         */
        public $Scope;

        /**
         * The total number of people who belong to this audience in the Search network.
         * @var integer
         */
        public $SearchSize;

        /**
         * The list of campaign types that support this audience.
         * @var string[]
         */
        public $SupportedCampaignTypes;

        /**
         * The type of the audience.
         * @var AudienceType
         */
        public $Type;
    }

}
