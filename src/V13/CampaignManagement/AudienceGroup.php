<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an AudienceGroup data object.
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
         * The number of asset groups that associate with this audience group.
         * @var integer
         */
        public $AssociationCount;

        /**
         * The description of the audience.
         * @var string
         */
        public $Description;

        /**
         * Positive dimensions that specifying the audience composition.
         * @var AudienceGroupDimension[]
         */
        public $Dimensions;

        /**
         * The system-generated ID.
         * @var integer
         */
        public $Id;

        /**
         * The name of the audience signal, the name must be unique among all audience groups within the account.
         * @var string
         */
        public $Name;
    }

}
