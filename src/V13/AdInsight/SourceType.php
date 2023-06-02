<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the source or seed for the keyword idea.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/sourcetype?view=bingads-13 SourceType Value Set
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

        /** The keyword idea is sourced from a provided URL. */
        const SuggestionFromUrl = 'SuggestionFromUrl';

        /** The keyword idea is sourced from a provided category. */
        const SuggestionFromCategory = 'SuggestionFromCategory';
    }

}
