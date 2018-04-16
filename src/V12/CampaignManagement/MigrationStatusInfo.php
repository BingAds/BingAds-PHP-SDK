<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an object that contains the migration type and status for an account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/migrationstatusinfo?view=bingads-12 MigrationStatusInfo Data Object
     * 
     * @uses MigrationStatus
     * @used-by AccountMigrationStatusesInfo
     */
    final class MigrationStatusInfo
    {
        /**
         * The migration type.
         * @var string
         */
        public $MigrationType;

        /**
         * The date and time when the migration began.
         * @var \DateTime
         */
        public $StartTimeInUtc;

        /**
         * The migration status.
         * @var MigrationStatus
         */
        public $Status;
    }

}
