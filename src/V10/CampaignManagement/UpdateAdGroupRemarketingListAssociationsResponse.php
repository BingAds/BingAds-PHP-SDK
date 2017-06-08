<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the properties of each specified ad group to remarketing list association.
     * @link http://msdn.microsoft.com/en-us/library/mt735052(v=msads.100).aspx UpdateAdGroupRemarketingListAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupRemarketingListAssociations
     */
    final class UpdateAdGroupRemarketingListAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
