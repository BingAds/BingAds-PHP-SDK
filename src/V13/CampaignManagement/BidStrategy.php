<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A portfolio bid strategy is an automated bidding feature that manages bidding across multiple campaigns that are all working toward the same goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/bidstrategy?view=bingads-13 BidStrategy Data Object
     * 
     * @uses CampaignType
     * @uses BiddingScheme
     * @uses EntityScope
     * @used-by AddBidStrategiesRequest
     * @used-by GetBidStrategiesByIdsResponse
     * @used-by UpdateBidStrategiesRequest
     */
    final class BidStrategy
    {
        /**
         * The type of ad campaign that can be included the portfolio bid strategy.
         * @var CampaignType
         */
        public $AssociatedCampaignType;

        /**
         * The number of Campaign objects that currently share this bid strategy.
         * @var integer
         */
        public $AssociationCount;

        /**
         * The portfolio bid strategy type and settings.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * Reserved.
         * @var string
         */
        public $CurrencyCode;

        /**
         * The unique Microsoft Advertising identifier of the bid strategy.
         * @var integer
         */
        public $Id;

        /**
         * The name of the bid strategy.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var string
         */
        public $ReportingTimeZone;

        /**
         * Reserved.
         * @var EntityScope
         */
        public $Scope;
    }

}
