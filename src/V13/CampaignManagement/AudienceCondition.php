<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audiencecondition?view=bingads-13 AudienceCondition Data Object
     * 
     * @uses AudienceConditionItem
     * @used-by ConversionValueRule
     */
    final class AudienceCondition
    {
        /**
         * Reserved.
         * @var AudienceConditionItem[]
         */
        public $Audiences;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsPrimary;
    }

}
