<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The network search parameter filter that you can include when requesting keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/networksearchparameter?view=bingads-13 NetworkSearchParameter Data Object
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
