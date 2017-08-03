<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the migration status info for the specified accounts.
     * @link http://msdn.microsoft.com/en-us/library/mt706125(v=msads.100).aspx GetAccountMigrationStatuses Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAccountMigrationStatuses
     */
    final class GetAccountMigrationStatusesRequest
    {
        /**
         * The identifiers of each account to request migration status.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * Filters the returned migration status by migration type.
         * @var string
         */
        public $MigrationType;
    }
}
