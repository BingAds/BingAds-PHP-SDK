<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Represents the association between an ad group and a remarketing list.
     * @link http://msdn.microsoft.com/en-us/library/mt735042(v=msads.100).aspx AdGroupRemarketingListAssociation Data Object
     * 
     * @uses AdGroupRemarketingListAssociationStatus
     * @used-by AddAdGroupRemarketingListAssociationsRequest
     * @used-by DeleteAdGroupRemarketingListAssociationsRequest
     * @used-by GetAdGroupRemarketingListAssociationsResponse
     * @used-by UpdateAdGroupRemarketingListAssociationsRequest
     */
    final class AdGroupRemarketingListAssociation
    {
        public $AdGroupId;
        public $BidAdjustment;
        public $Id;
        public $IsExcluded;
        public $RemarketingListId;
        public $Status;
    }

}
