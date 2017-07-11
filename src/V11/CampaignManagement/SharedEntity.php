<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base class of a shared entity.
     * @link http://msdn.microsoft.com/en-us/library/dn743735(v=msads.110).aspx SharedEntity Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by AddSharedEntityRequest
     * @used-by DeleteSharedEntitiesRequest
     * @used-by GetSharedEntitiesByAccountIdResponse
     * @used-by UpdateSharedEntitiesRequest
     */
    class SharedEntity
    {
        /**
         * The number of active associations between this object and an entity such as a campaign.
         * @var integer
         */
        public $AssociationCount;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier of the shared entity.
         * @var integer
         */
        public $Id;

        /**
         * The name of the shared entity.
         * @var string
         */
        public $Name;

        /**
         * The type of the shared entity.
         * @var string
         */
        public $Type;
    }

}
