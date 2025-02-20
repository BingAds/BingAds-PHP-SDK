<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for DataExclusion.
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
         * Which campaigns to include for the data exclusion.
         * @var CampaignAssociation[]
         */
        public $CampaignAssociations;

        /**
         * Which campaign types to include for the data exclusion.
         * @var CampaignType
         */
        public $CampaignTypeFilter;

        /**
         * A description for the data exclusion.
         * @var string
         */
        public $Description;

        /**
         * Which devices types to include for the data exclusion.
         * @var DeviceType
         */
        public $DeviceTypeFilter;

        /**
         * The end date.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * The data exclusion ID.
         * @var integer
         */
        public $Id;

        /**
         * The data exclusion name.
         * @var string
         */
        public $Name;

        /**
         * The start date.
         * @var \DateTime
         */
        public $StartDate;
    }

}
