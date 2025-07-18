<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified supported clip champ audio.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsupportedclipchampaudio?view=bingads-13 GetSupportedClipchampAudio Request Object
     * 
     * @uses AudioFilter
     * @used-by BingAdsCampaignManagementService::GetSupportedClipchampAudio
     */
    final class GetSupportedClipchampAudioRequest
    {
        /**
         * Reserved.
         * @var AudioFilter
         */
        public $AudioFilter;
    }
}
