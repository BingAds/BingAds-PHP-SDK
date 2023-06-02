<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audiencegroup?view=bingads-13 AudienceGroup Data Object
     * 
     * @uses AudienceGroupDimension
     * @used-by AddAudienceGroupsRequest
     * @used-by GetAudienceGroupsByIdsResponse
     * @used-by UpdateAudienceGroupsRequest
     */
    final class AudienceGroup
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AssociationCount;

        /**
         * Reserved.
         * @var string
         */
        public $Description;

        /**
         * Reserved.
         * @var AudienceGroupDimension[]
         */
        public $Dimensions;

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
    }

}
