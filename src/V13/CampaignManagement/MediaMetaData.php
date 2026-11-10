<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a media meta data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/mediametadata?view=bingads-13 MediaMetaData Data Object
     * 
     * @uses AdvertiserAILabel
     * @uses MediaRepresentation
     * @uses SystemAIDetectionSignal
     * @used-by GetMediaMetaDataByAccountIdResponse
     * @used-by GetMediaMetaDataByIdsResponse
     */
    final class MediaMetaData
    {
        /**
         * The advertiser's declaration about AI-generated content and visible watermarks in the image, returned when retrieving media metadata.
         * @var AdvertiserAILabel
         */
        public $AdvertiserAILabel;

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
         * Microsoft's detection of AI provenance for the image, returned when retrieving media metadata.
         * @var SystemAIDetectionSignal
         */
        public $SystemAIDetectionSignal;

        /**
         * The media text.
         * @var string
         */
        public $Text;

        /**
         * The type of media in the library.
         * @var string
         */
        public $Type;
    }

}
