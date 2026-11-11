<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the CompanyList data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/companylist?view=bingads-13 CompanyList Data Object
     * 
     * @uses CompanyName
     */
    final class CompanyList extends LinkedInSegment
    {
        /**
         * The companies included in the company list.
         * @var CompanyName[]
         */
        public $CompanyNames;

        /**
         * The number of companies that Microsoft Advertising matched.
         * @var integer
         */
        public $Matched;

        /**
         * The total number of companies in the company list.
         * @var integer
         */
        public $Total;
    }

}
