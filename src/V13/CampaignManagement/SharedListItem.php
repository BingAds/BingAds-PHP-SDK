<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base class of a shared list item.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/sharedlistitem?view=bingads-13 SharedListItem Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by AddListItemsToSharedListRequest
     * @used-by AddSharedEntityRequest
     * @used-by GetListItemsBySharedListResponse
     */
    class SharedListItem
    {
        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The type of the shared list item.
         * @var string
         */
        public $Type;
    }

}
