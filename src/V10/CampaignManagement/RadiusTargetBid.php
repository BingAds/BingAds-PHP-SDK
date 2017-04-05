<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a specific geographical radius target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dd796863(v=msads.100).aspx RadiusTargetBid Data Object
     * 
     * @uses DistanceUnit
     * @used-by RadiusTarget
     */
    final class RadiusTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted geographical location radius.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Reserved for future use.
         * @var integer
         */
        public $Id;

        /**
         * Reserved for future use.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The latitude, in degrees, of the target location.
         * @var double
         */
        public $LatitudeDegrees;

        /**
         * The longitude, in degrees, of the target location.
         * @var double
         */
        public $LongitudeDegrees;

        /**
         * The name of the geographical location being targeted.
         * @var string
         */
        public $Name;

        /**
         * The radius that specifies the area surrounding the geographical location to target.
         * @var double
         */
        public $Radius;

        /**
         * The unit of measurement for the specified radius, for example kilometers or miles.
         * @var DistanceUnit
         */
        public $RadiusUnit;
    }

}
