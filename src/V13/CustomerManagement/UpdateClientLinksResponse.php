<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the status of the specified client links.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/updateclientlinks?view=bingads-13 UpdateClientLinks Response Object
     * 
     * @uses OperationError
     * @used-by BingAdsCustomerManagementService::UpdateClientLinks
     */
    final class UpdateClientLinksResponse
    {
        /**
         * A list of one or more reasons why the service operation failed, and no client links were added.
         * @var OperationError[]
         */
        public $OperationErrors;

        /**
         * An array of OperationError lists that contain details for any client links that were not successfully added.
         * @var OperationError[][]
         */
        public $PartialErrors;
    }
}
