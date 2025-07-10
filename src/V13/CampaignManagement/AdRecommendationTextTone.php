<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A value set for the optional tone for recommended text assets.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationtexttone?view=bingads-13 AdRecommendationTextTone Value Set
     * 
     * @used-by AdRecommendationTextRefineOperation
     * @used-by CreateAssetGroupRecommendationRequest
     * @used-by CreateResponsiveAdRecommendationRequest
     * @used-by CreateResponsiveSearchAdRecommendationRequest
     */
    final class AdRecommendationTextTone
    {
        /** The text tone is friendly. */
        const Friendly = 'Friendly';

        /** The text tone is persuasive. */
        const Persuasive = 'Persuasive';

        /** The text tone is cute. */
        const Cute = 'Cute';

        /** The text tone is inspiring. */
        const Inspiring = 'Inspiring';
    }

}
