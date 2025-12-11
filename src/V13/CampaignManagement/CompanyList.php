<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/companylist?view=bingads-13 CompanyList Data Object
     * 
     * @uses CompanyName
     */
    final class CompanyList extends LinkedInSegment
    {
        /**
         * Reserved.
         * @var CompanyName[]
         */
        public $CompanyNames;

        /**
         * Reserved.
         * @var integer
         */
        public $Matched;

        /**
         * Reserved.
         * @var integer
         */
        public $Total;
    }

}
