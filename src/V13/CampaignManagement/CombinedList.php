<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A combined list is an audience created from a combination of multiple existing audiences.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/combinedlist?view=bingads-13 CombinedList Data Object
     * 
     * @uses CombinationRule
     */
    final class CombinedList extends Audience
    {
        /**
         * Logical conditions used to determine who to add to your combined list.
         * @var CombinationRule[]
         */
        public $CombinationRules;
    }

}
