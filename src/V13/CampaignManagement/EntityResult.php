<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the EntityResult data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/entityresult?view=bingads-13 EntityResult Data Object
     * 
     * @uses CategoryResult
     * @used-by GetDiagnosticsResponse
     */
    final class EntityResult
    {
        /**
         * The entity categories.
         * @var CategoryResult[]
         */
        public $Categories;

        /**
         * The entity ID.
         * @var integer
         */
        public $Id;

        /**
         * The entity sub type.
         * @var string
         */
        public $SubType;

        /**
         * The entity type.
         * @var string
         */
        public $Type;
    }

}
