<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Represents the annotation opt-out configuration for an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/annotationoptout?view=bingads-13 AnnotationOptOut Data Object
     * 
     * @used-by GetAnnotationOptOutResponse
     * @used-by UpdateAnnotationOptOutRequest
     */
    final class AnnotationOptOut
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The annotation group ID.
         * @var integer
         */
        public $AnnotationGroupId;

        /**
         * The customer ID.
         * @var integer
         */
        public $CustomerId;

        /**
         * Whether or not the entity is opted out.
         * @var boolean
         */
        public $IsOptOut;
    }

}
