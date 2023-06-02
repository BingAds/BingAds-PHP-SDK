<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an audience that is similar to one of your remarketing lists.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/similarremarketinglist?view=bingads-13 SimilarRemarketingList Data Object
     */
    final class SimilarRemarketingList extends Audience
    {
        /**
         * The Microsoft Advertising identifier of the remarketing list that Microsoft Advertising used to generate this similar audience.
         * @var integer
         */
        public $SourceId;
    }

}
