<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a criterion that you want applied to the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn913126(v=msads.110).aspx CampaignCriterion Data Object
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
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier for the campaign criterion.
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
