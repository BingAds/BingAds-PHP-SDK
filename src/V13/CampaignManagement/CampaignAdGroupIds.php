<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Identifies a campaign and the list of its ad groups to include within the operation scope.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/campaignadgroupids?view=bingads-13 CampaignAdGroupIds Data Object
     * 
     * @used-by GoogleImportJob
     */
    final class CampaignAdGroupIds
    {
        /**
         * Identifies the list a campaign's ad groups to include within the operation scope.
         * @var integer[]
         */
        public $AdGroupIds;

        /**
         * Identifies a campaign to include within the operation scope.
         * @var integer
         */
        public $CampaignId;
    }

}
