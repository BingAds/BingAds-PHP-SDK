<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the DiagnosticsEntity data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/diagnosticsentity?view=bingads-13 DiagnosticsEntity Data Object
     * 
     * @used-by GetDiagnosticsRequest
     */
    final class DiagnosticsEntity
    {
        /**
         * The diagnostic entity ID.
         * @var integer
         */
        public $Id;

        /**
         * The diagnostic entity sub type.
         * @var string
         */
        public $SubType;

        /**
         * The diagnostic entity type.
         * @var string
         */
        public $Type;
    }

}
