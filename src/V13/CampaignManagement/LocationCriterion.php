<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users in a specific location.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/locationcriterion?view=bingads-13 LocationCriterion Data Object
     */
    final class LocationCriterion extends Criterion
    {
        /**
         * The location display name.
         * @var string
         */
        public $DisplayName;

        /**
         * Reserved for internal use.
         * @var integer[]
         */
        public $EnclosedLocationIds;

        /**
         * The unique Microsoft Advertising identifier for the location where you want to show your ads.
         * @var integer
         */
        public $LocationId;

        /**
         * The location type.
         * @var string
         */
        public $LocationType;
    }

}
