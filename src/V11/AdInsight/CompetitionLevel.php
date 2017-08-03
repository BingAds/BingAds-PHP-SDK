<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Competition levels are defined by the number of advertisers bidding on this keyword, relative to all other keywords across Bing Ads.
     * @link http://msdn.microsoft.com/en-us/library/mt784418(v=msads.110).aspx CompetitionLevel Value Set
     * 
     * @used-by CompetitionSearchParameter
     * @used-by KeywordIdea
     */
    final class CompetitionLevel
    {
        /** The competition level is low. */
        const Low = 'Low';

        /** The competition level is medium. */
        const Medium = 'Medium';

        /** The competition level is high. */
        const High = 'High';
    }

}
