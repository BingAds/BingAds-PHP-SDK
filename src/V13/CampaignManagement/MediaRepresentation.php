<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a media representation base class that includes a  media download Url.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/mediarepresentation?view=bingads-13 MediaRepresentation Data Object
     * 
     * @used-by MediaMetaData
     */
    class MediaRepresentation
    {
        /**
         * The name of the media representation.
         * @var string
         */
        public $Name;

        /**
         * The type of the media representation.
         * @var string
         */
        public $Type;

        /**
         * The media download URL.
         * @var string
         */
        public $Url;
    }

}
