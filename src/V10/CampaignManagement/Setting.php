<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the base class of a setting.
     * @link http://msdn.microsoft.com/en-us/library/dn913122(v=msads.100).aspx Setting Data Object
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
