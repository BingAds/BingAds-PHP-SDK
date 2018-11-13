<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a media meta data object.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/mediametadata?view=bingads-12 MediaMetaData Data Object
     * 
     * @uses MediaRepresentation
     * @used-by GetMediaMetaDataByAccountIdResponse
     * @used-by GetMediaMetaDataByIdsResponse
     */
    final class MediaMetaData
    {
        /**
         * The system identifier of the media meta data.
         * @var integer
         */
        public $Id;

        /**
         * The name of the media subclass.
         * @var string
         */
        public $MediaType;

        /**
         * A list of ImageMediaRepresentation that each include download URLs for one or more media representations.
         * @var MediaRepresentation[]
         */
        public $Representations;

        /**
         * The type of media in the library.
         * @var string
         */
        public $Type;
    }

}
