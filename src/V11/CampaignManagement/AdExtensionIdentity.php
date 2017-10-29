<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that identifies an ad extension revision.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adextensionidentity?version=11 AdExtensionIdentity Data Object
     * 
     * @used-by AddAdExtensionsResponse
     */
    final class AdExtensionIdentity
    {
        /**
         * The system-generated identifier of the ad extension.
         * @var integer
         */
        public $Id;

        /**
         * The number of times the contents of the ad extension has been updated.
         * @var integer
         */
        public $Version;
    }

}
