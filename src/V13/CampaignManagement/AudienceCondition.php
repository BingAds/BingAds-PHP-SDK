<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a condition to use conversion value rules for specified audiences.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audiencecondition?view=bingads-13 AudienceCondition Data Object
     * 
     * @uses AudienceConditionItem
     * @used-by ConversionValueRule
     */
    final class AudienceCondition
    {
        /**
         * The audiences included in the condition.
         * @var AudienceConditionItem[]
         */
        public $Audiences;

        /**
         * Indicates if this is the primary condition.
         * @var boolean
         */
        public $IsPrimary;
    }

}
