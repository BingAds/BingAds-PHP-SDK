<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the migration status info for the specified accounts.
     * @link http://msdn.microsoft.com/en-us/library/mt706125(v=msads.110).aspx GetAccountMigrationStatuses Response Object
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
