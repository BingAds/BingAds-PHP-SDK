<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that specifies third-party reviews (exact or paraphrased) about your business, products, or services to include in an expanded text ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/reviewadextension?view=bingads-13 ReviewAdExtension Data Object
     */
    final class ReviewAdExtension extends AdExtension
    {
        /**
         * Determines whether the review text is an exact quote or paraphrased.
         * @var boolean
         */
        public $IsExact;

        /**
         * The review source name.
         * @var string
         */
        public $Source;

        /**
         * The text that is either a paraphrase or an exact quote from the review source.
         * @var string
         */
        public $Text;

        /**
         * The review source Url.
         * @var string
         */
        public $Url;
    }

}
