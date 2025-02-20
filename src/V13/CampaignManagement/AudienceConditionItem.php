<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audienceconditionitem?view=bingads-13 AudienceConditionItem Data Object
     * 
     * @uses AudienceType
     * @used-by AudienceCondition
     */
    final class AudienceConditionItem
    {
        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var AudienceType
         */
        public $Type;
    }

}
