<?php
// Generated on 7/10/2017 3:08:16 PM

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
