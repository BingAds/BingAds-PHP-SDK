<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Associates the specified ad groups with the respective remarketing lists.
     * @link http://msdn.microsoft.com/en-us/library/mt735048(v=msads.100).aspx AddAdGroupRemarketingListAssociations Request Object
     * 
     * @uses AdGroupRemarketingListAssociation
     * @used-by BingAdsCampaignManagementService::AddAdGroupRemarketingListAssociations
     */
    final class AddAdGroupRemarketingListAssociationsRequest
    {
        /**
         * The list of up to 1,000 ad group remarketing list associations that you want to add.
         * @var AdGroupRemarketingListAssociation[]
         */
        public $AdGroupRemarketingListAssociations;
    }
}
