<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * A text asset with a unique Bing Ads identifier that can be reused across multiple ads.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/textasset?view=bingads-12 TextAsset Data Object
     */
    final class TextAsset extends Asset
    {
        /**
         * The meaning and business rules for the text asset vary depending on where it is used.
         * @var string
         */
        public $Text;
    }

}
