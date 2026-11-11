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
        /** The text field is a headline. */
        const Headline = 'Headline';

        /** The text field is a long headline. */
        const LongHeadline = 'LongHeadline';

        /** The text field is a description. */
        const Description = 'Description';

        /** The text field is a call to action. */
        const CallToAction = 'CallToAction';
    }

}
