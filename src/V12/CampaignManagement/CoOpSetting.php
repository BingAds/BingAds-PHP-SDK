<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/coopsetting?view=bingads-12 CoOpSetting Data Object
     * 
     * @uses BidOption
     */
    final class CoOpSetting extends Setting
    {
        /**
         * Reserved.
         * @var double
         */
        public $BidBoostValue;

        /**
         * Reserved.
         * @var double
         */
        public $BidMaxValue;

        /**
         * Reserved.
         * @var BidOption
         */
        public $BidOption;
    }

}
