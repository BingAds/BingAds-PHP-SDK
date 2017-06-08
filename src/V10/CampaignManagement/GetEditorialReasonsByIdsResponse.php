<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
     * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.100).aspx GetEditorialReasonsByIds Response Object
     * 
     * @uses EditorialReasonCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
     */
    final class GetEditorialReasonsByIdsResponse
    {
        /**
         * An array of EditorialReasonCollection objects that corresponds directly to the EntityIdToParentIdAssociation objects that you specified in the request.
         * @var EditorialReasonCollection[]
         */
        public $EditorialReasons;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
