<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to a specific audience.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/audiencecriterion?view=bingads-13 AudienceCriterion Data Object
     * 
     * @uses AudienceType
     */
    final class AudienceCriterion extends Criterion
    {
        /**
         * The Microsoft Advertising identifier of the Audience.
         * @var integer
         */
        public $AudienceId;

        /**
         * The audience type.
         * @var AudienceType
         */
        public $AudienceType;
    }

}
