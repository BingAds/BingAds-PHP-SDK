<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users in a specific location.
     * @link http://msdn.microsoft.com/en-us/library/mt807664(v=msads.110).aspx LocationCriterion Data Object
     */
    final class LocationCriterion extends Criterion
    {
        public $DisplayName;
        public $EnclosedLocationIds;
        public $LocationId;
        public $LocationType;
    }

}
