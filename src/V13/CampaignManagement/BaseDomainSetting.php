<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the BaseDomainSetting data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/basedomainsetting?view=bingads-13 BaseDomainSetting Data Object
     */
    final class BaseDomainSetting extends Setting
    {
        /**
         * The fundamental part of the URL (e.g., contoso.com).
         * @var string
         */
        public $BaseDomain;
    }

}
