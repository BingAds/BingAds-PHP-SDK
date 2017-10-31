<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible search networks on which an ad can display.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/networktype?view=bingads-11 NetworkType Value Set
     * 
     * @used-by NetworkCriterion
     */
    final class NetworkType
    {
        /** Indicates that you want keyword ideas or traffic estimates for ads on owned and operated networks, as well as syndicated search networks. */
        const OwnedAndOperatedAndSyndicatedSearch = 'OwnedAndOperatedAndSyndicatedSearch';

        /** Indicates that you want keyword ideas or traffic estimates for ads on only owned and operated networks. */
        const OwnedAndOperatedOnly = 'OwnedAndOperatedOnly';

        /** Indicates that you want keyword ideas or traffic estimates for ads on only syndicated search networks. */
        const SyndicatedSearchOnly = 'SyndicatedSearchOnly';
    }

}
