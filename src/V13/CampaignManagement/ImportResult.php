<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Contains the status, run time, and statistical results for an import job that has run.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/importresult?view=bingads-13 ImportResult Data Object
     * 
     * @uses ImportEntityStatistics
     * @uses KeyValuePairOfstringstring
     * @uses ImportJob
     * @used-by GetImportResultsResponse
     */
    final class ImportResult
    {
        /**
         * The statistical import results for each supported entity type.
         * @var ImportEntityStatistics[]
         */
        public $EntityStatistics;

        /**
         * The URL where you can download the error logs.
         * @var string
         */
        public $ErrorLogUrl;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Microsoft Advertising identifier of the import result.
         * @var string
         */
        public $Id;

        /**
         * The settings in effect at the time the import job was run.
         * @var ImportJob
         */
        public $ImportJob;

        /**
         * The date and time the import job was run.
         * @var \DateTime
         */
        public $StartTimeInUTC;

        /**
         * The import job status.
         * @var string
         */
        public $Status;
    }

}
