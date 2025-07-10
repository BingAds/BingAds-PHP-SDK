<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified supported clip champ audio.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsupportedclipchampaudio?view=bingads-13 GetSupportedClipchampAudio Response Object
     * 
     * @uses SupportedClipchampAudioData
     * @used-by BingAdsCampaignManagementService::GetSupportedClipchampAudio
     */
    final class GetSupportedClipchampAudioResponse
    {
        /**
         * Reserved.
         * @var SupportedClipchampAudioData
         */
        public $Data;
    }
}
