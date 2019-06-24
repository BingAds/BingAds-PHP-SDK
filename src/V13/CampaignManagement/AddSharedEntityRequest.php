<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds a negative keyword list to the account's library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addsharedentity?view=bingads-13 AddSharedEntity Request Object
     * 
     * @uses SharedEntity
     * @uses SharedListItem
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
    final class AddSharedEntityRequest
    {
        /**
         * The negative keyword list to add to the account's shared library.
         * @var SharedEntity
         */
        public $SharedEntity;

        /**
         * The negative keywords to add to the negative keyword list.
         * @var SharedListItem[]
         */
        public $ListItems;
    }
}
