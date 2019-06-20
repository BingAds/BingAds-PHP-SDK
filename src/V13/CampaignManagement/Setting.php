<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base class of a setting.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/setting?view=bingads-13 Setting Data Object
     * 
     * @used-by AdGroup
     * @used-by Campaign
     */
    class Setting
    {
        /**
         * The type of setting.
         * @var string
         */
        public $Type;
    }

}
