<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets account level properties by name.
     * @link http://msdn.microsoft.com/en-us/library/mt803284(v=msads.110).aspx GetAccountProperties Response Object
     * 
     * @uses AccountProperty
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAccountProperties
     */
    final class GetAccountPropertiesResponse
    {
        /**
         * An array of account properties.
         * @var AccountProperty[]
         */
        public $AccountProperties;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
