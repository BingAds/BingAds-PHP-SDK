<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the impression tracking setting data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/impressiontrackingsetting?view=bingads-13 ImpressionTrackingSetting Data Object
     */
    final class ImpressionTrackingSetting extends Setting
    {
        /**
         * The URL used to track impressions.
         * @var string
         */
        public $ImpressionTrackingUrl;
    }

}
