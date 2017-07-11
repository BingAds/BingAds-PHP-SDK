<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.110).aspx UpdateAdExtensions Request Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::UpdateAdExtensions
     */
    final class UpdateAdExtensionsRequest
    {
        /**
         * The identifier of the account which contains the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions of any type, to update within the account.
         * @var AdExtension[]
         */
        public $AdExtensions;
    }
}
