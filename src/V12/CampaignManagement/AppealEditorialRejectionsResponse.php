<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Appeals ads or keywords that failed editorial review.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/appealeditorialrejections?view=bingads-12 AppealEditorialRejections Response Object
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
