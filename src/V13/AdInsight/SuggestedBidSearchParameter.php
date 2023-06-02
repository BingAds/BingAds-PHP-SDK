<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The suggested bid search parameter filter that you can include when requesting keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/suggestedbidsearchparameter?view=bingads-13 SuggestedBidSearchParameter Data Object
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
