<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that contains migration status for an account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/accountmigrationstatusesinfo?view=bingads-11 AccountMigrationStatusesInfo Data Object
     * 
     * @uses MigrationStatusInfo
     * @used-by GetAccountMigrationStatusesResponse
     */
    final class AccountMigrationStatusesInfo
    {
        /**
         * The Bing Ads identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of migration status info for the corresponding account.
         * @var MigrationStatusInfo[]
         */
        public $MigrationStatusInfo;
    }

}
