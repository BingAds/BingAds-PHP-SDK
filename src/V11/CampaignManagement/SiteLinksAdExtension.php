<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object with multiple sitelinks per ad extension.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/sitelinksadextension?version=11 SiteLinksAdExtension Data Object
     * 
     * @uses SiteLink
     */
    final class SiteLinksAdExtension extends AdExtension
    {
        /**
         * A list of site links.
         * @var SiteLink[]
         */
        public $SiteLinks;
    }

}
