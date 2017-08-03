<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The network criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link http://msdn.microsoft.com/en-us/library/mt784401(v=msads.110).aspx NetworkCriterion Data Object
     * 
     * @uses NetworkType
     * @used-by NetworkSearchParameter
     */
    final class NetworkCriterion extends Criterion
    {
        /**
         * The network that you want to target.
         * @var NetworkType
         */
        public $Network;
    }

}
