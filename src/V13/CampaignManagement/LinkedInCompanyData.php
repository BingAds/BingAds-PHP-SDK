<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The LinkedIn company data object.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/linkedincompanydata?view=bingads-13 LinkedInCompanyData Data Object
     * 
     * @uses CompanySizeCategory
     * @used-by CompanyName
     */
    final class LinkedInCompanyData
    {
        /**
         * The company ID.
         * @var integer
         */
        public $CompanyId;

        /**
         * The company logo.
         * @var string
         */
        public $CompanyLogo;

        /**
         * The company name.
         * @var string
         */
        public $CompanyName;

        /**
         * The company size.
         * @var string
         */
        public $CompanySize;

        /**
         * The company size category
         * @var CompanySizeCategory
         */
        public $CompanySizeCategory;

        /**
         * The company URL.
         * @var string
         */
        public $CompanyUrl;

        /**
         * The company industry.
         * @var string
         */
        public $Industry;
    }

}
