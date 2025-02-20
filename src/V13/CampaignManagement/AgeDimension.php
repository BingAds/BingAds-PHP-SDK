<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Data object that specifies users by their age.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/agedimension?view=bingads-13 AgeDimension Data Object
     * 
     * @uses AgeRange
     */
    final class AgeDimension extends AudienceGroupDimension
    {
        /**
         * A list of age ranges.
         * @var AgeRange[]
         */
        public $AgeRanges;
    }

}
