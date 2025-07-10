<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves a responsive ad recommentation job.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getresponsiveadrecommendationjob?view=bingads-13 GetResponsiveAdRecommendationJob Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetResponsiveAdRecommendationJob
     */
    final class GetResponsiveAdRecommendationJobRequest
    {
        /**
         * The unique identifier of a job.
         * @var integer
         */
        public $JobId;
    }
}
