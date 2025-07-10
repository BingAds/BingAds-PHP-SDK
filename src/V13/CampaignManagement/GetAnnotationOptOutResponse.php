<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Returns the current annotation opt-out configuration.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getannotationoptout?view=bingads-13 GetAnnotationOptOut Response Object
     * 
     * @uses AnnotationOptOut
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAnnotationOptOut
     */
    final class GetAnnotationOptOutResponse
    {
        /**
         * The justifcation text.
         * @var string
         */
        public $Justification;

        /**
         * An array of annotation opt out data objects.
         * @var AnnotationOptOut[]
         */
        public $AnnotationOptOuts;

        /**
         * Whether or not the account is opted out.
         * @var boolean
         */
        public $IsAccountOptOut;

        /**
         * Whether or not the customer is opted out.
         * @var boolean
         */
        public $IsCustomerOptOut;

        /**
         * Whether or not the customer is opted out of everything.
         * @var boolean
         */
        public $IsCustomerOptOutOfEverything;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
