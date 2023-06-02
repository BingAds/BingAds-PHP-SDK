<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that you want applied to the specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaigncriterion?view=bingads-13 CampaignCriterion Data Object
     * 
     * @uses Criterion
     * @uses KeyValuePairOfstringstring
     * @uses CampaignCriterionStatus
     * @used-by AddCampaignCriterionsRequest
     * @used-by GetCampaignCriterionsByIdsResponse
     * @used-by UpdateCampaignCriterionsRequest
     */
    class CampaignCriterion
    {
        /**
         * The identifier of the campaign to apply the criterion to.
         * @var integer
         */
        public $CampaignId;

        /**
         * The criterion to apply to the campaign.
         * @var Criterion
         */
        public $Criterion;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Microsoft Advertising identifier for the campaign criterion.
         * @var integer
         */
        public $Id;

        /**
         * A status value that determines whether to apply the criterion to the campaign.
         * @var CampaignCriterionStatus
         */
        public $Status;

        /**
         * The type of campaign criterion.
         * @var string
         */
        public $Type;
    }

}
