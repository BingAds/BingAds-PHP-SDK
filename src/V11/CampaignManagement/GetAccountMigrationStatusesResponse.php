<?php
// Generated on 7/10/2017 3:08:23 PM

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
