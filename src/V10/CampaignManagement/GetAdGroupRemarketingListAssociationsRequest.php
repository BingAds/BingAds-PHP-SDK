<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the ad group remarketing list associations.
     * @link http://msdn.microsoft.com/en-us/library/mt735050(v=msads.100).aspx GetAdGroupRemarketingListAssociations Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdGroupRemarketingListAssociations
     */
    final class GetAdGroupRemarketingListAssociationsRequest
    {
        /**
         * A list of unique ad group identifiers that identify the ad group remarketing list associations to get.
         * @var integer[]
         */
        public $AdGroupIds;

        /**
         * Determines whether or not the service should return ad group remarketing list exclusions for the specified ad group identifiers.
         * @var boolean
         */
        public $ReturnExclusions;
    }
}
