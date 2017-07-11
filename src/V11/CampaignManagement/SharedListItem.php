<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base class of a shared list item.
     * @link http://msdn.microsoft.com/en-us/library/dn743738(v=msads.110).aspx SharedListItem Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by AddListItemsToSharedListRequest
     * @used-by AddSharedEntityRequest
     * @used-by GetListItemsBySharedListResponse
     */
    class SharedListItem
    {
        /**
         * The list of key and value strings for forward compatibility.
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
