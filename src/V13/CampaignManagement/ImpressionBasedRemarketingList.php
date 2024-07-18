<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/impressionbasedremarketinglist?view=bingads-13 ImpressionBasedRemarketingList Data Object
     * 
     * @uses ImpressionBasedEntityType
     */
    final class ImpressionBasedRemarketingList extends Audience
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AdGroupId;

        /**
         * Reserved.
         * @var integer
         */
        public $CampaignId;

        /**
         * Reserved.
         * @var ImpressionBasedEntityType
         */
        public $EntityType;
    }

}
