<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible match types for a keyword or negative keyword.
     * @link http://msdn.microsoft.com/en-us/library/dn249974(v=msads.110).aspx MatchType Value Set
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

        /** The match type is Content. */
        const Content = 'Content';
    }

}
