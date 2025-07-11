<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad recommendation additional field value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationadditionalfield?view=bingads-13 AdRecommendationAdditionalField Value Set
     * 
     * @used-by CreateAssetGroupRecommendationRequest
     * @used-by CreateResponsiveAdRecommendationRequest
     * @used-by RefineAssetGroupRecommendationRequest
     * @used-by RefineResponsiveAdRecommendationRequest
     */
    final class AdRecommendationAdditionalField
    {
        /** The meta data for the suggested image. */
        const ImageSuggestionMetadata = 'ImageSuggestionMetadata';

        /** The media refine results. */
        const MediaRefineResults = 'MediaRefineResults';

        /** Whether the brand is detected in the request prompt. */
        const PromptBrandWarning = 'PromptBrandWarning';
    }

}
