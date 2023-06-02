<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users in a specific company, industry, or job function.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/profilecriterion?view=bingads-13 ProfileCriterion Data Object
     * 
     * @uses ProfileType
     */
    final class ProfileCriterion extends Criterion
    {
        /**
         * The identifier of the company name, industry, or job function profile that you want to target.
         * @var integer
         */
        public $ProfileId;

        /**
         * Determines whether the profile criterion corresponds to a company name, industry, or job function.
         * @var ProfileType
         */
        public $ProfileType;
    }

}
