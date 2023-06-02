<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the reasons why the specified entities failed editorial review and whether the issue is appealable.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/geteditorialreasonsbyids?view=bingads-13 GetEditorialReasonsByIds Response Object
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
