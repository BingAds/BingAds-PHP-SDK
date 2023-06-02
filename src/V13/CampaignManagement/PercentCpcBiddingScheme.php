<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the percent CPC bid strategy type (total hotel price per night, including taxes and fees).
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/percentcpcbiddingscheme?view=bingads-13 PercentCpcBiddingScheme Data Object
     */
    final class PercentCpcBiddingScheme extends BiddingScheme
    {
        /**
         * The maximum effective bid limit, in absolute form, at the campaign level.
         * @var double
         */
        public $MaxPercentCpc;
    }

}
