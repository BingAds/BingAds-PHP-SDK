<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the RecommendationType value set.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/recommendationtype?view=bingads-13 RecommendationType Value Set
     * 
     * @used-by RecommendationBase
     */
    final class RecommendationType
    {
        /** Fix campaigns limited by budget. */
        const CampaignBudgetRecommendation = 'CampaignBudgetRecommendation';

        /** Add new keywords from all sources. */
        const KeywordRecommendation = 'KeywordRecommendation';

        /** Add new responsive search ad. */
        const ResponsiveSearchAdRecommendation = 'ResponsiveSearchAdRecommendation';

        /** Remove the recommendation for conflicting negative keywords. */
        const RemoveConflictingNegativeKeywordRecommendation = 'RemoveConflictingNegativeKeywordRecommendation';

        /** Use the broad match keyword recommendation. */
        const UseBroadMatchKeywordRecommendation = 'UseBroadMatchKeywordRecommendation';

        /** Add bew responsive search ads set. */
        const ResponsiveSearchAdAssetRecommendation = 'ResponsiveSearchAdAssetRecommendation';
    }

}
