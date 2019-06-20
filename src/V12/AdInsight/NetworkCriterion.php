<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * The network criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/networkcriterion?view=bingads-12 NetworkCriterion Data Object
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
