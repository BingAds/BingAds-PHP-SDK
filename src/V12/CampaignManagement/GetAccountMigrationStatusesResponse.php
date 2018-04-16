<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the migration status info for the specified accounts.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getaccountmigrationstatuses?view=bingads-12 GetAccountMigrationStatuses Response Object
     * 
     * @uses AccountMigrationStatusesInfo
     * @used-by BingAdsCampaignManagementService::GetAccountMigrationStatuses
     */
    final class GetAccountMigrationStatusesResponse
    {
        /**
         * An array of account migration statuses.
         * @var AccountMigrationStatusesInfo[]
         */
        public $MigrationStatuses;
    }
}
