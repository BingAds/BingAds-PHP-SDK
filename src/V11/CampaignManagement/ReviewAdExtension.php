<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that specifies third-party reviews (exact or paraphrased) about your business, products, or services to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/mt691509(v=msads.110).aspx ReviewAdExtension Data Object
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
