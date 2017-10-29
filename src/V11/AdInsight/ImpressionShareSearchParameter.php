<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The impression share search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/impressionsharesearchparameter?version=11 ImpressionShareSearchParameter Data Object
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
