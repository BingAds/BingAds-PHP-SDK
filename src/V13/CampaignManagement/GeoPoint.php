<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that contains the longitude and latitude coordinates of a geographical location.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/geopoint?view=bingads-13 GeoPoint Data Object
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
