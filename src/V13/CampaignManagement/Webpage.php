<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a webpage parameter that contains a list of webpage conditions or criteria that help determine whether you want to show dynamic search ads.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/webpage?view=bingads-13 Webpage Data Object
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
