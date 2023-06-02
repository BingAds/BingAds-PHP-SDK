<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the specified media from an account's media library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletemedia?view=bingads-13 DeleteMedia Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteMedia
     */
    final class DeleteMediaRequest
    {
        /**
         * The identifier of the account that owns the media library.
         * @var integer
         */
        public $AccountId;

        /**
         * A maximum of 100 media identifiers to delete from the account's media library.
         * @var integer[]
         */
        public $MediaIds;
    }
}
