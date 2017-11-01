<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The location search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/locationsearchparameter?view=bingads-11 LocationSearchParameter Data Object
     * 
     * @uses LocationCriterion
     */
    final class LocationSearchParameter extends SearchParameter
    {
        /**
         * The location criterion list for the returned keyword ideas.
         * @var LocationCriterion[]
         */
        public $Locations;
    }

}
