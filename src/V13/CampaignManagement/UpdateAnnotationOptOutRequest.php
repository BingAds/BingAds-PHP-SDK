<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the annotation opt-out settings for an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateannotationoptout?view=bingads-13 UpdateAnnotationOptOut Request Object
     * 
     * @uses AnnotationOptOut
     * @used-by BingAdsCampaignManagementService::UpdateAnnotationOptOut
     */
    final class UpdateAnnotationOptOutRequest
    {
        /**
         * The justification text.
         * @var string
         */
        public $Justification;

        /**
         * An array of annotation opt out data objects.
         * @var AnnotationOptOut[]
         */
        public $AnnotationOptOuts;
    }
}
