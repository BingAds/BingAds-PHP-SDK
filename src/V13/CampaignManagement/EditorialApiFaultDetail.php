<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a fault object that operations such as AddAdGroupCriterions, UpdateAdGroupCriterions, SetAdExtensionsAssociations, and UpdateAdExtensions return when one or more criterion or ad extensions in your request message fail editorial review.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/editorialapifaultdetail?view=bingads-13 EditorialApiFaultDetail Data Object
     * 
     * @uses BatchError
     * @uses EditorialError
     * @uses OperationError
     */
    final class EditorialApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of batch errors that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * An array of editorial errors that contains the details that explain why the criterion or ad extension was disapproved.
         * @var EditorialError[]
         */
        public $EditorialErrors;

        /**
         * An array of operation errors that contains the details that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

}
