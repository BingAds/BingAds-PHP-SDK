<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that specifies additional text about your business, products, or services to include in a text ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/calloutadextension?view=bingads-11 CalloutAdExtension Data Object
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
