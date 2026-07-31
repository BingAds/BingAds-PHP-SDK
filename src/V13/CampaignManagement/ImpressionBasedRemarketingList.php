<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for ImpressionBasedRemarketingList.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/impressionbasedremarketinglist?view=bingads-13 ImpressionBasedRemarketingList Data Object
     * 
     * @uses ImpressionBasedEntityType
     */
    final class ImpressionBasedRemarketingList extends Audience
    {
        /**
         * The ad group identifier to associate with the impression-based remarketing list.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A list of unique system identifiers corresponding to the ad groups associated with the impression-based remarketing list.
         * @var integer[]
         */
        public $AdGroupIds;

        /**
         * The campaign identifier to associate with the impression-based remarketing list.
         * @var integer
         */
        public $CampaignId;

        /**
         * A list of unique system identifiers corresponding to the campaigns associated with the impression-based remarketing list.
         * @var integer[]
         */
        public $CampaignIds;

        /**
         * The entity type of an impression-based remarketing list.
         * @var ImpressionBasedEntityType
         */
        public $EntityType;
    }

}
