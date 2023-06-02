<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds a negative keyword list to the ad account library, or adds a website exclusion list to the manager account (customer) library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addsharedentity?view=bingads-13 AddSharedEntity Request Object
     * 
     * @uses SharedEntity
     * @uses SharedListItem
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
    final class AddSharedEntityRequest
    {
        /**
         * The negative keyword list or website exclusion list.
         * @var SharedEntity
         */
        public $SharedEntity;

        /**
         * The negative keywords (5,000 total maximum) to include with the new negative keyword list, or negative sites (10,000 total maximum) to include with the new website exclusion list.
         * @var SharedListItem[]
         */
        public $ListItems;

        /**
         * Indicates whether the shared entity is available at the ad account (Account) or manager account (Customer) level.
         * @var EntityScope
         */
        public $SharedEntityScope;
    }
}
