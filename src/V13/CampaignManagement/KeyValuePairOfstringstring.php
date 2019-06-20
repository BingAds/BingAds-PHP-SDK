<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/keyvaluepairofstringstring?view=bingads-13 KeyValuePairOfstringstring Data Object
     * 
     * @used-by Ad
     * @used-by AdExtension
     * @used-by AdGroup
     * @used-by Audience
     * @used-by BatchError
     * @used-by BatchErrorCollection
     * @used-by Campaign
     * @used-by CampaignCriterion
     * @used-by Keyword
     * @used-by SharedEntity
     * @used-by SharedListItem
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
