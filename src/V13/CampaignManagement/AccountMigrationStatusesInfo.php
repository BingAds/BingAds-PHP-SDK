<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that contains migration status for an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/accountmigrationstatusesinfo?view=bingads-13 AccountMigrationStatusesInfo Data Object
     * 
     * @uses MigrationStatusInfo
     * @used-by GetAccountMigrationStatusesResponse
     */
    final class AccountMigrationStatusesInfo
    {
        /**
         * The Microsoft Advertising identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of migration status info for the corresponding account.
         * @var MigrationStatusInfo[]
         */
        public $MigrationStatusInfos;
    }

}
