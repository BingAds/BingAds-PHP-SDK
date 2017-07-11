<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users within the radius of a specific geographical location.
     * @link http://msdn.microsoft.com/en-us/library/mt807668(v=msads.110).aspx RadiusCriterion Data Object
     * 
     * @uses DistanceUnit
     */
    final class RadiusCriterion extends Criterion
    {
        public $LatitudeDegrees;
        public $LongitudeDegrees;
        public $Name;
        public $Radius;
        public $RadiusUnit;
    }

}
