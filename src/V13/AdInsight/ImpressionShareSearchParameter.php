<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The impression share search parameter filter that you can include when requesting keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/impressionsharesearchparameter?view=bingads-13 ImpressionShareSearchParameter Data Object
     */
    final class ImpressionShareSearchParameter extends SearchParameter
    {
        /**
         * The maximum impression share that you want for keyword ideas.
         * @var double
         */
        public $Maximum;

        /**
         * The minimum impression share that you want for keyword ideas.
         * @var double
         */
        public $Minimum;
    }

}
