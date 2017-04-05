<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains the requested bid landscape type for the corresponding ad group identifier.
     * @link http://msdn.microsoft.com/en-us/library/mt219326(v=msads.100).aspx AdGroupBidLandscapeInput Data Object
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
