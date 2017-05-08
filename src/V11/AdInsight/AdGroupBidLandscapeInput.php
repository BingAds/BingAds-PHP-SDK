<?php
// Generated on 5/7/2017 5:48:15 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the requested bid landscape type for the corresponding ad group identifier.
     * @link http://msdn.microsoft.com/en-us/library/mt219326(v=msads.110).aspx AdGroupBidLandscapeInput Data Object
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
