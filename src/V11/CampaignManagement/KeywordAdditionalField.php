<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a list of optional Keyword properties that you can request when calling GetKeywordsByAdGroupId, GetKeywordsByEditorialStatus, and GetKeywordsByIds.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/keywordadditionalfield?view=bingads-11 KeywordAdditionalField Value Set
     * 
     * @used-by GetKeywordsByAdGroupIdRequest
     * @used-by GetKeywordsByEditorialStatusRequest
     * @used-by GetKeywordsByIdsRequest
     */
    final class KeywordAdditionalField
    {
        /** Includes the InheritedBidStrategyType element that can be nested within the BiddingScheme element of an Keyword object. */
        const InheritedBidStrategyType = 'InheritedBidStrategyType';
    }

}
