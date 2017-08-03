<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Associates the specified ad groups with the respective remarketing lists.
     * @link http://msdn.microsoft.com/en-us/library/mt735048(v=msads.100).aspx AddAdGroupRemarketingListAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAdGroupRemarketingListAssociations
     */
    final class AddAdGroupRemarketingListAssociationsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the ad group remarketing list associations that were added.
         * @var integer[]
         */
        public $AssociationIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
