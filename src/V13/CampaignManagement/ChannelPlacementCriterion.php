<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the channel placement criterion data object.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/channelplacementcriterion?view=bingads-13 ChannelPlacementCriterion Data Object
     */
    final class ChannelPlacementCriterion extends Criterion
    {
        /**
         * The channel ID.
         * @var integer
         */
        public $ChannelId;

        /**
         * The channel name.
         * @var string
         */
        public $ChannelName;

        /**
         * The channel placement ID.
         * @var integer
         */
        public $ChannelPlacementId;

        /**
         * The channel placement name.
         * @var string
         */
        public $ChannelPlacementName;

        /**
         * The sub-channel ID.
         * @var integer
         */
        public $SubChannelId;

        /**
         * The sub-channel name.
         * @var string
         */
        public $SubChannelName;
    }

}
