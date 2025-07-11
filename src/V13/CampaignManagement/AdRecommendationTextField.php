<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad recommendation text field value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationtextfield?view=bingads-13 AdRecommendationTextField Value Set
     * 
     * @used-by AdRecommendationTextAssetProperty
     * @used-by AdRecommendationTextRefineOperation
     */
    final class AdRecommendationTextField
    {
        /** Reserved. */
        const Headline = 'Headline';

        /** Reserved. */
        const LongHeadline = 'LongHeadline';

        /** Reserved. */
        const Description = 'Description';

        /** Reserved. */
        const CallToAction = 'CallToAction';
    }

}
