<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an object that contains the migration type and status for an account.
     * @link http://msdn.microsoft.com/en-us/library/mt706126(v=msads.100).aspx MigrationStatusInfo Data Object
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
