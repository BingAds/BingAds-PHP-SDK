<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the conditions or criteria that determine whether you want to show Dynamic Search ads or apply an AI Max URL inclusion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/webpageparameter?view=bingads-13 WebpageParameter Data Object
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
