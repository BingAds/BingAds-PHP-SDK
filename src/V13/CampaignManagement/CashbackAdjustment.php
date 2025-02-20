<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the CashbackAdjustment Data Object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/cashbackadjustment?view=bingads-13 CashbackAdjustment Data Object
     */
    final class CashbackAdjustment extends CriterionCashback
    {
        /**
         * The percent to receive in cashback.
         * @var double
         */
        public $CashbackPercent;
    }

}
