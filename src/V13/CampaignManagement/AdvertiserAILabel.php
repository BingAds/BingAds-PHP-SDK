<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/advertiserailabel?view=bingads-13 AdvertiserAILabel Value Set
     *
     * @used-by Media
     * @used-by MediaMetaData
     * @used-by Video
     */
    final class AdvertiserAILabel
    {
        /** Reserved. */
        const NotSupportedForGivenRevision = 'NotSupportedForGivenRevision';

        /** Reserved. */
        const AIWithVisibleWatermark = 'AIWithVisibleWatermark';

        /** Reserved. */
        const AIContent = 'AIContent';

        /** Reserved. */
        const NoAIContent = 'NoAIContent';
    }

}
