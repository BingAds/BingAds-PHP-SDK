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
         * The LinkedIn profile.
         * @var string
         */
        public $Profile;

        /**
         * The LinkedIn profile ID.
         * @var integer
         */
        public $ProfileId;

        /**
         * The LinkedIn profile type.
         * @var ProfileType
         */
        public $ProfileType;
    }

}
