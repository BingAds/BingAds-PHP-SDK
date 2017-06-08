<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an object that can contain different types of geographical targets, for example lists of city and state targets.
     * @link http://msdn.microsoft.com/en-us/library/bb671646(v=msads.100).aspx LocationTarget Data Object
     * 
     * @uses CityTarget
     * @uses CountryTarget
     * @uses IntentOption
     * @uses MetroAreaTarget
     * @uses PostalCodeTarget
     * @uses RadiusTarget
     * @uses StateTarget
     * @used-by Target
     */
    final class LocationTarget
    {
        public $CityTarget;
        public $CountryTarget;
        public $IntentOption;
        public $MetroAreaTarget;
        public $PostalCodeTarget;
        public $RadiusTarget;
        public $StateTarget;
    }

}
