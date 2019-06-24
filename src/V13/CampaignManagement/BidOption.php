<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Determines whether or not to amplify your partner's bid.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/bidoption?view=bingads-13 BidOption Value Set
     * 
     * @used-by CoOpSetting
     */
    final class BidOption
    {
        /** A bid value ad group allows you to bid on products that your merchandising partner doesn't target. */
        const BidValue = 'BidValue';

        /** A bid boost allows you to amplify your partner's bid. */
        const BidBoost = 'BidBoost';
    }

}
