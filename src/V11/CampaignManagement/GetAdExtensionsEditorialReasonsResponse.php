<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets editorial rejection reasons for the respective ad extension and entity associations.
     * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.110).aspx GetAdExtensionsEditorialReasons Response Object
     * 
     * @uses AdExtensionEditorialReasonCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
     */
    final class GetAdExtensionsEditorialReasonsResponse
    {
        /**
         * The collection of ad extension editorial reasons.
         * @var AdExtensionEditorialReasonCollection[]
         */
        public $EditorialReasons;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
