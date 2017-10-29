<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to a specific audience.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/audiencecriterion?version=11 AudienceCriterion Data Object
     * 
     * @uses AudienceType
     */
    final class AudienceCriterion extends Criterion
    {
        /**
         * The Bing Ads identifier of the Audience.
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
