<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the CompanyName data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/companyname?view=bingads-13 CompanyName Data Object
     * 
     * @uses CompanyNameStatus
     * @used-by CompanyList
     */
    final class CompanyName
    {
        /**
         * The company name ID.
         * @var integer
         */
        public $Id;

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
