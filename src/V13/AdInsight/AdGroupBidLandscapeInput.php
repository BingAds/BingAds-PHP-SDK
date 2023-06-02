<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the requested bid landscape type for the corresponding ad group identifier.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/adgroupbidlandscapeinput?view=bingads-13 AdGroupBidLandscapeInput Data Object
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
