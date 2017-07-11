<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.110).aspx DeleteAdExtensions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensions
     */
    final class DeleteAdExtensionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
