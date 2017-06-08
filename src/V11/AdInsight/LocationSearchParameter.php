<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The location search parameter filter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784400(v=msads.110).aspx LocationSearchParameter Data Object
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
