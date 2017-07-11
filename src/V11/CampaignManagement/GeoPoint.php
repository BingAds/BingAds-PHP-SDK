<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that contains the longitude and latitude coordinates of a geographical location.
     * @link http://msdn.microsoft.com/en-us/library/jj721599(v=msads.110).aspx GeoPoint Data Object
     * 
     * @used-by LocationAdExtension
     */
    final class GeoPoint
    {
        /**
         * The latitude specified in micro degrees.
         * @var integer
         */
        public $LatitudeInMicroDegrees;

        /**
         * The longitude specified in micro degrees.
         * @var integer
         */
        public $LongitudeInMicroDegrees;
    }

}
