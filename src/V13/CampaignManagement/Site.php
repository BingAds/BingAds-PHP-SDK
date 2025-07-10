<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for adding a site to an inclusion list.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/site?view=bingads-13 Site Data Object
     */
    final class Site extends SharedListItem
    {
        /**
         * The unique Microsoft Advertising identifier of the site.
         * @var integer
         */
        public $Id;

        /**
         * The URL of the site.
         * @var string
         */
        public $Url;
    }

}
