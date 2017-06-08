<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The location criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link http://msdn.microsoft.com/en-us/library/mt784404(v=msads.110).aspx LocationCriterion Data Object
     * 
     * @used-by LocationSearchParameter
     */
    final class LocationCriterion extends Criterion
    {
        /**
         * The Bing Ads identifier of the location that you want to target.
         * @var integer
         */
        public $LocationId;
    }

}
