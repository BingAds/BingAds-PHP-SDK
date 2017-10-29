<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base class of a shared entity.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/sharedentity?version=11 SharedEntity Data Object
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
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
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
