<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an object that contains a list of entity identifiers.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/idcollection?view=bingads-12 IdCollection Data Object
     * 
     * @used-by AddNegativeKeywordsToEntitiesResponse
     * @used-by GetCampaignIdsByBudgetIdsResponse
     */
    final class IdCollection
    {
        /**
         * A list of entity identifiers.
         * @var integer[]
         */
        public $Ids;
    }

}
