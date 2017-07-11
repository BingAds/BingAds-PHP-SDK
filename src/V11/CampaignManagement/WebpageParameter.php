<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the conditions or criteria that determine whether you want to show dynamic search ads.
     * @link http://msdn.microsoft.com/en-us/library/mt772367(v=msads.110).aspx WebpageParameter Data Object
     * 
     * @uses WebpageCondition
     * @used-by Webpage
     */
    final class WebpageParameter
    {
        /**
         * The webpage conditions or criteria.
         * @var WebpageCondition[]
         */
        public $Conditions;

        /**
         * The criterion name that you can use to identify the criteria, for example you can filter or sort alphabetically.
         * @var string
         */
        public $CriterionName;
    }

}
