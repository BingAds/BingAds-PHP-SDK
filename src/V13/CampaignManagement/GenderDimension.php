<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a GenderDimension data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/genderdimension?view=bingads-13 GenderDimension Data Object
     * 
     * @uses GenderType
     */
    final class GenderDimension extends AudienceGroupDimension
    {
        /**
         * A list of gender types.
         * @var GenderType[]
         */
        public $GenderTypes;
    }

}
