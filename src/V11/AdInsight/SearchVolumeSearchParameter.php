<?php
// Generated on 7/10/2017 3:08:16 PM

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
