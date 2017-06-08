<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the source or seed for the keyword idea.
     * @link http://msdn.microsoft.com/en-us/library/mt784415(v=msads.110).aspx SourceType Value Set
     * 
     * @used-by KeywordIdea
     */
    final class SourceType
    {
        /** The keyword idea source is unknown. */
        const Unknown = 'Unknown';

        /** The keyword idea source is a seed that you provided such as the query search parameter. */
        const Seed = 'Seed';

        /** The keyword idea is sourced from a provided keyword. */
        const SuggestionFromKeyword = 'SuggestionFromKeyword';
        const SuggestionFromUrl = 'SuggestionFromUrl';

        /** The keyword idea is sourced from a provided category. */
        const SuggestionFromCategory = 'SuggestionFromCategory';
    }

}
