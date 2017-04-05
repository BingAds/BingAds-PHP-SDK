<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a criterion that you want applied to the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn913126(v=msads.100).aspx CampaignCriterion Data Object
     * 
     * @uses Criterion
     * @uses KeyValuePairOfstringstring
     * @used-by AddCampaignCriterionsRequest
     * @used-by GetCampaignCriterionsByIdsResponse
     * @used-by UpdateCampaignCriterionsRequest
     */
    class CampaignCriterion
    {
        /**
         * Reserved for future use.
         * @var integer
         */
        public $BidAdjustment;

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
         * The type of campaign criterion.
         * @var string
         */
        public $Type;
    }

}
