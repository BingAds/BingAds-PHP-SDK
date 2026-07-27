<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the custom LinkedIn criterion data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customlinkedincriterion?view=bingads-13 CustomLinkedInCriterion Data Object
     * 
     * @uses ProfileType
     */
    final class CustomLinkedInCriterion extends Criterion
    {
        /**
         * Reserved.
         * @var string
         */
        public $Profile;

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
