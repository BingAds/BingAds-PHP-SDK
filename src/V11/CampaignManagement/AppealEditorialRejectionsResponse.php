<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.110).aspx AppealEditorialRejections Response Object
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
