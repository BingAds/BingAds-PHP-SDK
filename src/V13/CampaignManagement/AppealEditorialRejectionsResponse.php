<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Appeals ads or keywords that failed editorial review.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/appealeditorialrejections?view=bingads-13 AppealEditorialRejections Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
     */
    final class AppealEditorialRejectionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any appeals that were not successfully submitted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
