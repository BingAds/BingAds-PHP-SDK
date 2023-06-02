<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the profile data for a company.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/company?view=bingads-13 Company Data Object
     * 
     * @used-by SearchCompaniesResponse
     */
    final class Company
    {
        /**
         * The full https path for the company's logo image.
         * @var string
         */
        public $LogoUrl;

        /**
         * The company name.
         * @var string
         */
        public $Name;

        /**
         * The company name profile identifier that you can use with ProfileCriterion.
         * @var integer
         */
        public $ProfileId;

        /**
         * The company name profile status.
         * @var string
         */
        public $Status;
    }

}
