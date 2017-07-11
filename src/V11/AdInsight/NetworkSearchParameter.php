<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The network search parameter filter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784412(v=msads.110).aspx NetworkSearchParameter Data Object
     * 
     * @uses NetworkCriterion
     */
    final class NetworkSearchParameter extends SearchParameter
    {
        /**
         * The network criterion for the returned keyword ideas.
         * @var NetworkCriterion
         */
        public $Network;
    }

}
