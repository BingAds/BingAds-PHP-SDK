<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion to exclude one Microsoft Merchant Center store from your shopping campaign for brands.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/storecriterion?view=bingads-13 StoreCriterion Data Object
     */
    final class StoreCriterion extends Criterion
    {
        /**
         * The system-generated identifier of the Microsoft Merchant Center store to exclude.
         * @var integer
         */
        public $StoreId;
    }

}
