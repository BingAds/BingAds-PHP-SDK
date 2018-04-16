<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * The suggested bid search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/suggestedbidsearchparameter?view=bingads-12 SuggestedBidSearchParameter Data Object
     */
    final class SuggestedBidSearchParameter extends SearchParameter
    {
        /**
         * The maximum suggested bid that you want for keyword ideas.
         * @var double
         */
        public $Maximum;

        /**
         * The minimum suggested bid that you want for keyword ideas.
         * @var double
         */
        public $Minimum;
    }

}
