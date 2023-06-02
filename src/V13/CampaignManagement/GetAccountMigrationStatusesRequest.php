<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the migration status info for the specified accounts.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaccountmigrationstatuses?view=bingads-13 GetAccountMigrationStatuses Request Object
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
