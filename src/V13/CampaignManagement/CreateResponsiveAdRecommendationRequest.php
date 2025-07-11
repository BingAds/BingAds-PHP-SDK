<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Create a responsive ad recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createresponsiveadrecommendation?view=bingads-13 CreateResponsiveAdRecommendation Request Object
     * 
     * @uses AdSubType
     * @uses AdRecommendationTextTone
     * @uses AdRecommendationVideoType
     * @uses AdRecommendationAdditionalField
     * @used-by BingAdsCampaignManagementService::CreateResponsiveAdRecommendation
     */
    final class CreateResponsiveAdRecommendationRequest
    {
        /**
         * Optional ad sub type to create a recommendation for.
         * @var AdSubType
         */
        public $AdSubType;

        /**
         * An array of URLs of the web pages used to create recommended ad assets.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Optional description of the product or service that you want to target with the specific campaign.
         * @var string
         */
        public $Prompt;

        /**
         * Optional tone for recommended text assets
         * @var AdRecommendationTextTone
         */
        public $TextTone;

        /**
         * The video type, CTV or OLV.
         * @var AdRecommendationVideoType
         */
        public $VideoType;

        /**
         * The identifier of the brand kit.
         * @var integer
         */
        public $BrandKitId;

        /**
         * Additional fields for the latest features of create responsive ad recommendation.
         * @var AdRecommendationAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
