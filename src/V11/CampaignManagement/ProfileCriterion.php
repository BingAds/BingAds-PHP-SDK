<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/profilecriterion?view=bingads-11 ProfileCriterion Data Object
     * 
     * @uses ProfileType
     */
    final class ProfileCriterion extends Criterion
    {
        /**
         * Reserved.
         * @var integer
         */
        public $ProfileId;

        /**
         * Reserved.
         * @var ProfileType
         */
        public $ProfileType;
    }

}
