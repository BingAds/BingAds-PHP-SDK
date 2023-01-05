<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the commission bid strategy type (commission pay per stay).
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/commissionbiddingscheme?view=bingads-13 CommissionBiddingScheme Data Object
     */
    final class CommissionBiddingScheme extends BiddingScheme
    {
        /**
         * The commission rate charged to the advertiser when someone books a hotel and stays there.
         * @var double
         */
        public $CommissionRate;
    }

}
