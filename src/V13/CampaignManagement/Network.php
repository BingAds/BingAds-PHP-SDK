<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible search networks on which an ad can display.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/network?view=bingads-13 Network Value Set
     * 
     * @used-by AdGroup
     */
    final class Network
    {
        /** Display ads on owned and operated networks, as well as syndicated search networks. */
        const OwnedAndOperatedAndSyndicatedSearch = 'OwnedAndOperatedAndSyndicatedSearch';

        /** Display ads on only owned and operated networks. */
        const OwnedAndOperatedOnly = 'OwnedAndOperatedOnly';

        /** Display ads on only syndicated search networks. */
        const SyndicatedSearchOnly = 'SyndicatedSearchOnly';

        /** Display ads on the Retailer Network only. */
        const InHousePromotion = 'InHousePromotion';
    }

}
