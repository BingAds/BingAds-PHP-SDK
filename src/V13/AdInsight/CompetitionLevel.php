<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Competition levels are defined by the number of advertisers bidding on this keyword, relative to all other keywords across Microsoft Advertising.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/competitionlevel?view=bingads-13 CompetitionLevel Value Set
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
