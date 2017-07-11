<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base object of an audience.
     * @link http://msdn.microsoft.com/en-us/library/mt807660(v=msads.110).aspx Audience Data Object
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
         * The description of the audience.
         * @var string
         */
        public $Description;

        /**
         * The list of key and value strings for forward compatibility.
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
         * The type of the audience.
         * @var AudienceType
         */
        public $Type;
    }

}
