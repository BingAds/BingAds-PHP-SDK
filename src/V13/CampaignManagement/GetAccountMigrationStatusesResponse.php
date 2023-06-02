<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the migration status info for the specified accounts.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaccountmigrationstatuses?view=bingads-13 GetAccountMigrationStatuses Response Object
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
