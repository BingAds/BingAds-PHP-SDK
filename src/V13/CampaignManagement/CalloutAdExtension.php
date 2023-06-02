<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that specifies additional text about your business, products, or services to include in a text ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/calloutadextension?view=bingads-13 CalloutAdExtension Data Object
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
