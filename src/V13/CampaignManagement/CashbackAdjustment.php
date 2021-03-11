<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the CashbackAdjustment Data Object.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/cashbackadjustment?view=bingads-13 CashbackAdjustment Data Object
     */
    final class CashbackAdjustment extends CriterionCashback
    {
        /**
         * Reserved.
         * @var double
         */
        public $CashbackPercent;
    }

}
