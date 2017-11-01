<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the requested bid landscape type for the corresponding ad group identifier.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/adgroupbidlandscapeinput?view=bingads-11 AdGroupBidLandscapeInput Data Object
     * 
     * @uses AdGroupBidLandscapeType
     * @used-by GetBidLandscapeByAdGroupIdsRequest
     */
    final class AdGroupBidLandscapeInput
    {
        /**
         * Determines whether all or a subset of an ad group's existing keywords should be used to determine the bid landscape.
         * @var AdGroupBidLandscapeType
         */
        public $AdGroupBidLandscapeType;

        /**
         * The ad group identifier.
         * @var integer
         */
        public $AdGroupId;
    }

}
