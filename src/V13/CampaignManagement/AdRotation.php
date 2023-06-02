<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that specifies the type of ad rotation to apply to the ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrotation?view=bingads-13 AdRotation Data Object
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
