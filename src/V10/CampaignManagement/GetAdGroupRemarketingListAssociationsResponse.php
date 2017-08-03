<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the ad group remarketing list associations.
     * @link http://msdn.microsoft.com/en-us/library/mt735050(v=msads.100).aspx GetAdGroupRemarketingListAssociations Response Object
     * 
     * @uses AdGroupRemarketingListAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdGroupRemarketingListAssociations
     */
    final class GetAdGroupRemarketingListAssociationsResponse
    {
        /**
         * The list of ad group remarketing list associations do not correspond directly to the ad group identifiers specified in the request because there can be multiple remarketing lists associated with each ad group specified in the request.
         * @var AdGroupRemarketingListAssociation[]
         */
        public $AdGroupRemarketingListAssociations;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
