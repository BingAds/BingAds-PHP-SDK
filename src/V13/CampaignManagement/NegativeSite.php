<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a website URL where you do not want your ads displayed.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/negativesite?view=bingads-13 NegativeSite Data Object
     */
    final class NegativeSite extends SharedListItem
    {
        /**
         * The unique Microsoft Advertising identifier of the negative site.
         * @var integer
         */
        public $Id;

        /**
         * The URL of the website where you do not want your ads displayed.
         * @var string
         */
        public $Url;
    }

}
