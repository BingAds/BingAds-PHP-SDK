<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The search volume search parameter filter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784402(v=msads.110).aspx SearchVolumeSearchParameter Data Object
     */
    final class SearchVolumeSearchParameter extends SearchParameter
    {
        /**
         * The maximum search volume that you want for keyword ideas.
         * @var integer
         */
        public $Maximum;
        public $Minimum;
    }

}
