<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the possible networks used for keyword research.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/networktype?view=bingads-13 NetworkType Value Set
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
