<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The location search parameter filter that you can include when requesting keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/locationsearchparameter?view=bingads-13 LocationSearchParameter Data Object
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
