<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible search networks on which an ad can display.
     * @link http://msdn.microsoft.com/en-us/library/ff986253(v=msads.100).aspx Network Value Set
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
    }

}
