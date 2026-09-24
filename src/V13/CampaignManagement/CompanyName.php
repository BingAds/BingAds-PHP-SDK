<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the company name data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/companyname?view=bingads-13 CompanyName Data Object
     * 
     * @uses LinkedInCompanyData
     * @uses CompanyNameStatus
     * @used-by CompanyList
     * @used-by GetCompanyListDetailsResponse
     */
    final class CompanyName
    {
        /**
         * The company name ID.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var LinkedInCompanyData
         */
        public $LinkedInCompany;

        /**
         * The company name.
         * @var string
         */
        public $Name;

        /**
         * The company name status.
         * @var CompanyNameStatus
         */
        public $Status;
    }

}
