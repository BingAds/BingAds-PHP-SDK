<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A text asset with a unique Microsoft Advertising identifier that can be reused across multiple ads.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/textasset?view=bingads-13 TextAsset Data Object
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
