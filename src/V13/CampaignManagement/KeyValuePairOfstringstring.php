<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The key and value pair of string and string values defined by the Campaign Management service.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/keyvaluepairofstringstring?view=bingads-13 KeyValuePairOfstringstring Data Object
     * 
     * @used-by Ad
     * @used-by AdExtension
     * @used-by AdGroup
     * @used-by AssetGroup
     * @used-by Audience
     * @used-by BatchError
     * @used-by BatchErrorCollection
     * @used-by Campaign
     * @used-by CampaignCriterion
     * @used-by ImportOption
     * @used-by ImportResult
     * @used-by Keyword
     * @used-by SharedEntity
     * @used-by SharedListItem
     * @used-by VerifiedTrackingSetting
     */
    final class KeyValuePairOfstringstring
    {
        /**
         * The name of the setting.
         * @var string
         */
        public $key;

        /**
         * The value of the setting.
         * @var string
         */
        public $value;
    }

}
