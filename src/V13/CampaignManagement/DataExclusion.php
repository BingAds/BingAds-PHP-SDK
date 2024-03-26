<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/dataexclusion?view=bingads-13 DataExclusion Data Object
     * 
     * @uses CampaignAssociation
     * @uses CampaignType
     * @uses DeviceType
     * @used-by AddDataExclusionsRequest
     * @used-by GetDataExclusionsByAccountIdResponse
     * @used-by GetDataExclusionsByIdsResponse
     * @used-by UpdateDataExclusionsRequest
     */
    final class DataExclusion
    {
        /**
         * Reserved.
         * @var CampaignAssociation[]
         */
        public $CampaignAssociations;

        /**
         * Reserved.
         * @var CampaignType
         */
        public $CampaignTypeFilter;

        /**
         * Reserved.
         * @var string
         */
        public $Description;

        /**
         * Reserved.
         * @var DeviceType
         */
        public $DeviceTypeFilter;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $StartDate;
    }

}
