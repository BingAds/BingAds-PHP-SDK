<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an object that specifies the type of ad rotation to apply to the ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adrotation?view=bingads-12 AdRotation Data Object
     * 
     * @uses AdRotationType
     * @used-by AdGroup
     */
    final class AdRotation
    {
        /**
         * Reserved for future use only.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * Reserved for future use only.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The type of ad rotation to apply to the ad group.
         * @var AdRotationType
         */
        public $Type;
    }

}
