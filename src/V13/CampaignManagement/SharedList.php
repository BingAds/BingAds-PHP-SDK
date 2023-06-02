<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base class of a shared list.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/sharedlist?view=bingads-13 SharedList Data Object
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
