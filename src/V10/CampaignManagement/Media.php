<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the base object of media.
     * @link http://msdn.microsoft.com/en-us/library/dn195580(v=msads.100).aspx Media Data Object
     * 
     * @used-by AddMediaRequest
     * @used-by GetMediaByIdsResponse
     */
    class Media
    {
        /**
         * The unique Bing Ads identifier of the media.
         * @var integer
         */
        public $Id;

        /**
         * The media type.
         * @var string
         */
        public $MediaType;

        /**
         * The type of media to add to the media library.
         * @var string
         */
        public $Type;
    }

}
