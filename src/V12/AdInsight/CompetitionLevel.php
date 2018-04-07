<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Competition levels are defined by the number of advertisers bidding on this keyword, relative to all other keywords across Bing Ads.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/competitionlevel?view=bingads-12 CompetitionLevel Value Set
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
