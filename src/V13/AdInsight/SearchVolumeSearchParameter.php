<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The search volume search parameter filter that you can include when requesting keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/searchvolumesearchparameter?view=bingads-13 SearchVolumeSearchParameter Data Object
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
