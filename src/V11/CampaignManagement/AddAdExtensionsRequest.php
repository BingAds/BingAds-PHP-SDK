<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more ad extensions to an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.110).aspx AddAdExtensions Request Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::AddAdExtensions
     */
    final class AddAdExtensionsRequest
    {
        /**
         * The identifier of the account to add the extensions to.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions of any type to add to the account.
         * @var AdExtension[]
         */
        public $AdExtensions;
    }
}
