<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Identifies a campaign and the list of its ad groups to import.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaignadgroupids?view=bingads-13 CampaignAdGroupIds Data Object
     * 
     * @used-by GoogleImportJob
     */
    final class CampaignAdGroupIds
    {
        /**
         * Determines whether to include paused ad groups or only import active ad groups.
         * @var boolean
         */
        public $ActiveAdGroupsOnly;

        /**
         * Identifies the list of specific ad groups to import within the campaign.
         * @var integer[]
         */
        public $AdGroupIds;

        /**
         * Identifies the campaign to import.
         * @var integer
         */
        public $CampaignId;
    }

}
