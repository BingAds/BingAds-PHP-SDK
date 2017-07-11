<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets label associations by entity identifiers.
     * @link http://msdn.microsoft.com/en-us/library/mt803281(v=msads.110).aspx GetLabelAssociationsByEntityIds Response Object
     * 
     * @uses LabelAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetLabelAssociationsByEntityIds
     */
    final class GetLabelAssociationsByEntityIdsResponse
    {
        public $LabelAssociations;

        /**
         * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
