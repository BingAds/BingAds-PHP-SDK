<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that represents the identified media and an associated entity, for example media associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn798358(v=msads.110).aspx MediaAssociation Data Object
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
