<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the properties of each specified ad group to remarketing list association.
     * @link http://msdn.microsoft.com/en-us/library/mt735052(v=msads.100).aspx UpdateAdGroupRemarketingListAssociations Request Object
     * 
     * @uses AdGroupRemarketingListAssociation
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupRemarketingListAssociations
     */
    final class UpdateAdGroupRemarketingListAssociationsRequest
    {
        /**
         * The list of up to 1,000 ad group remarketing list associations to update.
         * @var AdGroupRemarketingListAssociation[]
         */
        public $AdGroupRemarketingListAssociations;
    }
}
