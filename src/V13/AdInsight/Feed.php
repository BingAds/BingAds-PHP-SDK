<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a Feed data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/feed?view=bingads-13 Feed Data Object
     * 
     * @used-by GetAudienceBreakdownRequest
     * @used-by GetAudienceFullEstimationRequest
     */
    final class Feed
    {
        /**
         * Respect StoreId when CampaignSubType is set to FeedBasedAds.
         * @var integer
         */
        public $StoreId;

        /**
         * Respect FeedId when CampaignSubType is set to DynamicFeedBasedAds.
         * @var integer
         */
        public $FeedId;

        /**
         * The feed type.
         * @var integer
         */
        public $FeedType;
    }

}
