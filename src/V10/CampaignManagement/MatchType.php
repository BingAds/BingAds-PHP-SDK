<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible match types for a keyword bid.
     * @link http://msdn.microsoft.com/en-us/library/dn249974(v=msads.100).aspx MatchType Value Set
     * 
     * @used-by Keyword
     * @used-by NegativeKeyword
     */
    final class MatchType
    {
        /** The keyword match type is Exact. */
        const Exact = 'Exact';

        /** The keyword match type is Phrase. */
        const Phrase = 'Phrase';

        /** The keyword match type is Broad. */
        const Broad = 'Broad';

        /** The keyword match type is Content. */
        const Content = 'Content';
    }

}
