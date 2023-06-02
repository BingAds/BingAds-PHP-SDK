<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base class of a shared entity.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/sharedentity?view=bingads-13 SharedEntity Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by AddSharedEntityRequest
     * @used-by DeleteSharedEntitiesRequest
     * @used-by GetSharedEntitiesResponse
     * @used-by GetSharedEntitiesByAccountIdResponse
     * @used-by UpdateSharedEntitiesRequest
     */
    class SharedEntity
    {
        /**
         * The number of active associations between this shared entity and another entity such as campaign or ad account.
         * @var integer
         */
        public $AssociationCount;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Microsoft Advertising identifier of the shared entity.
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
