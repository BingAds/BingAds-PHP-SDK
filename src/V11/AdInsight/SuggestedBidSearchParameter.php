<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The suggested bid search parameter filter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784413(v=msads.110).aspx SuggestedBidSearchParameter Data Object
     */
    final class SuggestedBidSearchParameter extends SearchParameter
    {
        /**
         * The maximum suggested bid that you want for keyword ideas.
         * @var double
         */
        public $Maximum;
        public $Minimum;
    }

}
