<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the DiagnosticsFilter data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/diagnosticsfilter?view=bingads-13 DiagnosticsFilter Data Object
     * 
     * @used-by GetDiagnosticsRequest
     */
    final class DiagnosticsFilter
    {
        /**
         * The name of the filter.
         * @var string
         */
        public $Key;

        /**
         * The values of the filter.
         * @var string[]
         */
        public $Values;
    }

}
