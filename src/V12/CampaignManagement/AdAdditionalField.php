<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a list of optional Ad properties that you can request when calling GetAdsByAdGroupId, GetAdsByEditorialStatus, and GetAdsByIds.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adadditionalfield?view=bingads-12 AdAdditionalField Value Set
     * 
     * @used-by GetAdsByAdGroupIdRequest
     * @used-by GetAdsByEditorialStatusRequest
     * @used-by GetAdsByIdsRequest
     */
    final class AdAdditionalField
    {
        /** Request that the TitlePart3 element be included within each returned ExpandedTextAd object. */
        const TitlePart3 = 'TitlePart3';

        /** Request that the TextPart2 element be included within each returned ExpandedTextAd object. */
        const TextPart2 = 'TextPart2';

        /** Request that the Images element be included within each returned ResponsiveAd object. */
        const Images = 'Images';
    }

}
