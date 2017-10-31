<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base class of a setting.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/setting?view=bingads-11 Setting Data Object
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
