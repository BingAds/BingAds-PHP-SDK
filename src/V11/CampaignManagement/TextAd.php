<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a text ad.
     * @link http://msdn.microsoft.com/en-us/library/bb672081(v=msads.110).aspx TextAd Data Object
     */
    final class TextAd extends Ad
    {
        public $DestinationUrl;
        public $DisplayUrl;
        public $Text;
        public $Title;
    }

}
