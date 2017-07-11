<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an ad extension that includes between 3 and 8 price table rows.
     * @link http://msdn.microsoft.com/en-us/library/mt807737(v=msads.110).aspx PriceAdExtension Data Object
     * 
     * @uses PriceExtensionType
     * @uses PriceTableRow
     * @uses CustomParameters
     */
    final class PriceAdExtension extends AdExtension
    {
        public $Language;
        public $PriceExtensionType;
        public $TableRows;
        public $TrackingUrlTemplate;
        public $UrlCustomParameters;
    }

}
