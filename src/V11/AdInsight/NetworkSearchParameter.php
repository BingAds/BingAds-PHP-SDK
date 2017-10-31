<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The network search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/networksearchparameter?view=bingads-11 NetworkSearchParameter Data Object
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
