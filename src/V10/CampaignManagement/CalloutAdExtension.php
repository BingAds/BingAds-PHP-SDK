<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an object that specifies additional text about your business, products, or services to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/mt691508(v=msads.100).aspx CalloutAdExtension Data Object
     */
    final class CalloutAdExtension extends AdExtension
    {
        /**
         * Additional callout text about your business, products, or services to include in a text ad.
         * @var string
         */
        public $Text;
    }

}
