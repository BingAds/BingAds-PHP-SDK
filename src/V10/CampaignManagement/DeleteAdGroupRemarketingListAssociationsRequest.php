<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more ad group remarketing list associations.
     * @link http://msdn.microsoft.com/en-us/library/mt735051(v=msads.100).aspx DeleteAdGroupRemarketingListAssociations Request Object
     * 
     * @uses AdGroupRemarketingListAssociation
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupRemarketingListAssociations
     */
    final class DeleteAdGroupRemarketingListAssociationsRequest
    {
        /**
         * The list of up to 1,000 ad group remarketing list associations to delete.
         * @var AdGroupRemarketingListAssociation[]
         */
        public $AdGroupRemarketingListAssociations;
    }
}
