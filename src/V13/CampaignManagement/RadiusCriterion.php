<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users within the radius of a specific geographical location.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/radiuscriterion?view=bingads-13 RadiusCriterion Data Object
     * 
     * @uses DistanceUnit
     */
    final class RadiusCriterion extends Criterion
    {
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
         * @var integer
         */
        public $Radius;

        /**
         * The unit of measurement for the specified radius, for example kilometers or miles.
         * @var DistanceUnit
         */
        public $RadiusUnit;
    }

}
