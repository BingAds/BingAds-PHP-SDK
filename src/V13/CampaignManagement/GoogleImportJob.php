<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a Google import job that can be run once or scheduled on a recurring basis.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/googleimportjob?view=bingads-13 GoogleImportJob Data Object
     * 
     * @uses CampaignAdGroupIds
     */
    final class GoogleImportJob extends ImportJob
    {
        /**
         * The list of campaigns and their ad groups to import from Google Ads.
         * @var CampaignAdGroupIds[]
         */
        public $CampaignAdGroupIds;

        /**
         * Authorizes a Google Ads user to import accounts to Microsoft Advertising.
         * @var string
         */
        public $CredentialId;

        /**
         * The Google Ads account to import.
         * @var integer
         */
        public $GoogleAccountId;

        /**
         * The Google account i.e., the Google user credentials with access to the Google Ads account.
         * @var string
         */
        public $GoogleUserName;
    }

}
