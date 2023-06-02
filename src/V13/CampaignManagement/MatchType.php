<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible match types for a keyword or negative keyword.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/matchtype?view=bingads-13 MatchType Value Set
     * 
     * @used-by Keyword
     * @used-by NegativeKeyword
     */
    final class MatchType
    {
        /** The match type is Exact. */
        const Exact = 'Exact';

        /** The match type is Phrase. */
        const Phrase = 'Phrase';

        /** The match type is Broad. */
        const Broad = 'Broad';
    }

}
