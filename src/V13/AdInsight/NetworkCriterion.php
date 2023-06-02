<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The network criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/networkcriterion?view=bingads-13 NetworkCriterion Data Object
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
