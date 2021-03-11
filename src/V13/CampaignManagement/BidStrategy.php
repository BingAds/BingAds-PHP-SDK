<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the BidStrategy Data Object.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/bidstrategy?view=bingads-13 BidStrategy Data Object
     * 
     * @uses CampaignType
     * @uses BiddingScheme
     * @used-by AddBidStrategiesRequest
     * @used-by GetBidStrategiesByIdsResponse
     * @used-by UpdateBidStrategiesRequest
     */
    final class BidStrategy
    {
        /**
         * Reserved.
         * @var CampaignType
         */
        public $AssociatedCampaignType;

        /**
         * Reserved.
         * @var integer
         */
        public $AssociationCount;

        /**
         * Reserved.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var string
         */
        public $Name;
    }

}
