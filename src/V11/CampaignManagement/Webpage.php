<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a webpage parameter that contains a list of webpage conditions or criteria that help determine whether you want to show dynamic search ads.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/webpage?view=bingads-11 Webpage Data Object
     * 
     * @uses WebpageParameter
     */
    final class Webpage extends Criterion
    {
        /**
         * The webpage parameter that contains a list of webpage conditions or criteria.
         * @var WebpageParameter
         */
        public $Parameter;
    }

}
