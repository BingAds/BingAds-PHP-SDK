<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that contains the migration type and status for an account.
     * @link http://msdn.microsoft.com/en-us/library/mt706126(v=msads.110).aspx MigrationStatusInfo Data Object
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
