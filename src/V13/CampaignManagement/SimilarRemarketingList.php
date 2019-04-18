<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an audience that is similar to one of your remarketing lists.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/similarremarketinglist?view=bingads-13 SimilarRemarketingList Data Object
     */
    final class SimilarRemarketingList extends Audience
    {
        /**
         * The Bing Ads identifier of the remarketing list that Bing Ads used to generate this similar audience.
         * @var integer
         */
        public $SourceId;
    }

}
