<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The impression share search parameter filter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784410(v=msads.110).aspx ImpressionShareSearchParameter Data Object
     */
    final class ImpressionShareSearchParameter extends SearchParameter
    {
        /**
         * The maximum impression share that you want for keyword ideas.
         * @var double
         */
        public $Maximum;
        public $Minimum;
    }

}
