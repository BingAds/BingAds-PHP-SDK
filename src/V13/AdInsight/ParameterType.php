<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the type of parameter: string, URL, or a list of demand entities.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/parametertype?view=bingads-13 ParameterType Value Set
     * 
     * @used-by PerformanceInsightsMessageParameter
     */
    final class ParameterType
    {
        /** Indicates the parameter is a string. */
        const Text = 'Text';

        /** Indicate the parameter is a URL. */
        const Url = 'Url';

        /** Indicates the parameter is a list of demand entities. */
        const Entities = 'Entities';
    }

}
