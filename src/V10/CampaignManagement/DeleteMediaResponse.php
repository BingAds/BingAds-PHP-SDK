<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766193(v=msads.100).aspx DeleteMedia Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteMedia
     */
    final class DeleteMediaResponse
    {
        /**
         * An array of BatchError objects that contain details for any media that were not successfully deleted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
