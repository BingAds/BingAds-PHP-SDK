<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an object that identifies an ad extension revision.
     * @link http://msdn.microsoft.com/en-us/library/jj134392(v=msads.100).aspx AdExtensionIdentity Data Object
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
