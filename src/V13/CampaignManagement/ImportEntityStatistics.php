<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The statistical import results for an entity type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/importentitystatistics?view=bingads-13 ImportEntityStatistics Data Object
     * 
     * @used-by ImportResult
     */
    final class ImportEntityStatistics
    {
        /**
         * The count of items added during import of the entity type.
         * @var integer
         */
        public $Additions;

        /**
         * The count of items changed or updated during import of the entity type.
         * @var integer
         */
        public $Changes;

        /**
         * The count of items deleted during import of the entity type.
         * @var integer
         */
        public $Deletions;

        /**
         * The type of entity eligible for import.
         * @var string
         */
        public $EntityType;

        /**
         * The count of errors during import of the entity type.
         * @var integer
         */
        public $Errors;

        /**
         * The total count of additions, changes, deletions, and errors during import of the entity type.
         * @var integer
         */
        public $Total;
    }

}
