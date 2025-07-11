<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an audience condition item data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audienceconditionitem?view=bingads-13 AudienceConditionItem Data Object
     * 
     * @uses AudienceType
     * @used-by AudienceCondition
     */
    final class AudienceConditionItem
    {
        /**
         * The unique identifier of the audience condition item.
         * @var integer
         */
        public $Id;

        /**
         * The name of the audience condition item.
         * @var string
         */
        public $Name;

        /**
         * The type of the audience condition item.
         * @var AudienceType
         */
        public $Type;
    }

}
