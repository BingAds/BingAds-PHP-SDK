<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the migration status info for the specified accounts.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getaccountmigrationstatuses?view=bingads-11 GetAccountMigrationStatuses Request Object
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
