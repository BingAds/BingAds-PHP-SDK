<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that provides detail information for an entity for performance insights.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/entitydetail?view=bingads-13 EntityDetail Data Object
     * 
     * @used-by EntityParameter
     */
    final class EntityDetail
    {
        /**
         * For account, this is AccountId.
         * @var integer
         */
        public $EntityId;

        /**
         * For account/campaign/ad group, this is the name information.
         * @var string
         */
        public $EntityName;
    }

}
