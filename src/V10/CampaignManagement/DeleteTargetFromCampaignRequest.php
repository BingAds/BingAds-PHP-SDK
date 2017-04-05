<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Removes the target association for the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277503(v=msads.100).aspx DeleteTargetFromCampaign Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetFromCampaign
     */
    final class DeleteTargetFromCampaignRequest
    {
        /**
         * The identifier of the campaign from which to remove the target association.
         * @var integer
         */
        public $CampaignId;
    }
}
