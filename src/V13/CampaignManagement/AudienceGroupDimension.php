<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an AudienceGroupDimension data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audiencegroupdimension?view=bingads-13 AudienceGroupDimension Data Object
     * 
     * @uses AudienceGroupDimensionType
     * @used-by AudienceGroup
     */
    class AudienceGroupDimension
    {
        /**
         * The type of audience dimensions, the following dimension types are supported as of now: Age, Gender, Audience.
         * @var AudienceGroupDimensionType
         */
        public $Type;
    }

}
