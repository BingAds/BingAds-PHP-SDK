<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets label associations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setlabelassociations?view=bingads-13 SetLabelAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetLabelAssociations
     */
    final class SetLabelAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
