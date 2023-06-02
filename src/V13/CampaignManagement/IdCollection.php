<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that contains a list of entity identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/idcollection?view=bingads-13 IdCollection Data Object
     * 
     * @used-by AddNegativeKeywordsToEntitiesResponse
     * @used-by GetCampaignIdsByBidStrategyIdsResponse
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
