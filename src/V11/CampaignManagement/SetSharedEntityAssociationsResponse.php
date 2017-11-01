<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets the association between a campaign and a negative keyword list.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/setsharedentityassociations?view=bingads-11 SetSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
    final class SetSharedEntityAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
