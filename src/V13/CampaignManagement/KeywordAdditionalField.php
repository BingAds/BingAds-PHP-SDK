<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Additional fields for the keyword object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/keywordadditionalfield?view=bingads-13 KeywordAdditionalField Value Set
     * 
     * @used-by GetKeywordsByAdGroupIdRequest
     * @used-by GetKeywordsByAssetGroupIdRequest
     * @used-by GetKeywordsByEditorialStatusRequest
     * @used-by GetKeywordsByIdsRequest
     */
    final class KeywordAdditionalField
    {
        /** Inlcude the MaxCpc element within each returned MaxConversionValueBiddingScheme object. */
        const MaxConversionValueWithMaxCpc = 'MaxConversionValueWithMaxCpc';
    }

}
