<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the advertiser's declaration about AI-generated content and visible watermarks in an asset.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/advertiserailabel?view=bingads-13 AdvertiserAILabel Value Set
     * 
     * @used-by Media
     * @used-by MediaMetaData
     * @used-by Video
     */
    final class AdvertiserAILabel
    {
        /** The requested API revision does not expose this capability. */
        const NotSupportedForGivenRevision = 'NotSupportedForGivenRevision';

        /** The asset contains AI-generated content, and you request a visible AI watermark where supported. */
        const AIWithVisibleWatermark = 'AIWithVisibleWatermark';

        /** The asset contains AI-generated content; no visible watermark is requested. */
        const AIContent = 'AIContent';

        /** The advertiser declares that the asset does not contain AI-generated content. */
        const NoAIContent = 'NoAIContent';
    }

}
