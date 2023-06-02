<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of an import job.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/importjob?view=bingads-13 ImportJob Data Object
     * 
     * @uses Frequency
     * @uses ImportOption
     * @used-by ImportResult
     * @used-by AddImportJobsRequest
     * @used-by GetImportJobsByIdsResponse
     * @used-by UpdateImportJobsRequest
     */
    class ImportJob
    {
        /**
         * The unique identifier of the Microsoft Advertising user who created the import job.
         * @var integer
         */
        public $CreatedByUserId;

        /**
         * The login user name of the Microsoft Advertising user who created the import job.
         * @var string
         */
        public $CreatedByUserName;

        /**
         * The date and time when the import job was created.
         * @var \DateTime
         */
        public $CreatedDateTimeInUTC;

        /**
         * Determines whether the import job should be run once or scheduled on a recurring basis.
         * @var Frequency
         */
        public $Frequency;

        /**
         * The unique Microsoft Advertising identifier of the import job.
         * @var integer
         */
        public $Id;

        /**
         * The import options that are available via API.
         * @var ImportOption
         */
        public $ImportOption;

        /**
         * The most recent import date and time for this job.
         * @var \DateTime
         */
        public $LastRunTimeInUTC;

        /**
         * The name of the import job
         * @var string
         */
        public $Name;

        /**
         * The email address where import results should be sent.
         * @var string
         */
        public $NotificationEmail;

        /**
         * Determines whether and how often you want to receive email notifications about the import job results.
         * @var string
         */
        public $NotificationType;

        /**
         * The status of the import job.
         * @var string
         */
        public $Status;

        /**
         * The type of the import job.
         * @var string
         */
        public $Type;
    }

}
