<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to a specific audience.
     * @link http://msdn.microsoft.com/en-us/library/mt807655(v=msads.110).aspx AudienceCriterion Data Object
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
