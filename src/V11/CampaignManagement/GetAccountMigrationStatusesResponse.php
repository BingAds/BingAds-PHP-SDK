<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the migration status info for the specified accounts.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getaccountmigrationstatuses?view=bingads-11 GetAccountMigrationStatuses Response Object
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
