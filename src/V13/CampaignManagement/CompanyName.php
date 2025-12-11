<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/companyname?view=bingads-13 CompanyName Data Object
     * 
     * @uses CompanyNameStatus
     * @used-by CompanyList
     */
    final class CompanyName
    {
        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var CompanyNameStatus
         */
        public $Status;
    }

}
