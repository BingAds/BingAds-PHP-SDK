<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The network criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/networkcriterion?version=11 NetworkCriterion Data Object
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
