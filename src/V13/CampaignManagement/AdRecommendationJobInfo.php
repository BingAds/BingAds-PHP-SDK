<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the ad recommendation job info data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationjobinfo?view=bingads-13 AdRecommendationJobInfo Data Object
     * 
     * @used-by CreateResponsiveAdRecommendationResponse
     * @used-by GetResponsiveAdRecommendationJobResponse
     */
    final class AdRecommendationJobInfo
    {
        /**
         * The error code when the JobStatus is Failed.
         * @var string
         */
        public $ErrorCode;

        /**
         * The error message when the JobStatus is Failed.
         * @var string
         */
        public $ErrorMessage;

        /**
         * The unique identifier of the job.
         * @var integer
         */
        public $JobId;

        /**
         * The status of the current job.
         * @var string
         */
        public $JobStatus;
    }

}
