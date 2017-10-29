<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The search volume search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/searchvolumesearchparameter?version=11 SearchVolumeSearchParameter Data Object
     */
    final class SearchVolumeSearchParameter extends SearchParameter
    {
        /**
         * The maximum search volume that you want for keyword ideas.
         * @var integer
         */
        public $Maximum;

        /**
         * The minimum search volume that you want for keyword ideas.
         * @var integer
         */
        public $Minimum;
    }

}
