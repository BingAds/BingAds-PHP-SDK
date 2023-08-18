<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * An object that inherits AudienceGroupDimension.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audiencedimension?view=bingads-13 AudienceDimension Data Object
     * 
     * @uses AudienceInfo
     */
    final class AudienceDimension extends AudienceGroupDimension
    {
        /**
         * A list of audiences.
         * @var AudienceInfo[]
         */
        public $Audiences;
    }

}
