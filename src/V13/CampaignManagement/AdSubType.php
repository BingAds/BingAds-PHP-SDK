<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible ad sub types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adsubtype?view=bingads-13 AdSubType Value Set
     * 
     * @used-by ResponsiveAd
     * @used-by CreateResponsiveAdRecommendationRequest
     * @used-by GetSupportedFontsRequest
     */
    final class AdSubType
    {
        /** The ad is a video ad. */
        const Video = 'Video';

        /** The ad is a display ad. */
        const Display = 'Display';
    }

}
