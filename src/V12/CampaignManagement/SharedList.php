<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the base class of a shared list.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/sharedlist?view=bingads-12 SharedList Data Object
     * 
     * @used-by AddListItemsToSharedListRequest
     * @used-by DeleteListItemsFromSharedListRequest
     * @used-by GetListItemsBySharedListRequest
     */
    class SharedList extends SharedEntity
    {
        /**
         * The number of SharedListItem objects that are added to this shared list.
         * @var integer
         */
        public $ItemCount;
    }

}
