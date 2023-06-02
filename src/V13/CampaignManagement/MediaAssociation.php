<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the identified media and an associated entity, for example media associated with an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/mediaassociation?view=bingads-13 MediaAssociation Data Object
     * 
     * @uses MediaEnabledEntityFilter
     * @used-by GetMediaAssociationsResponse
     */
    final class MediaAssociation
    {
        /**
         * The system identifier of the media enabled entity, for example the identifier of an ImageAdExtension.
         * @var integer
         */
        public $EntityId;

        /**
         * Determines the type of media to get.
         * @var MediaEnabledEntityFilter
         */
        public $MediaEnabledEntity;

        /**
         * The system identifier of the media.
         * @var integer
         */
        public $MediaId;
    }

}
