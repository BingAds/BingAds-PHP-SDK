<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a list of optional keyword properties that you can request when calling GetKeywordsByAdGroupId, GetKeywordsByEditorialStatus, and GetKeywordsByIds.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/keywordadditionalfield?view=bingads-12 KeywordAdditionalField Value Set
     * 
     * @used-by GetKeywordsByAdGroupIdRequest
     * @used-by GetKeywordsByEditorialStatusRequest
     * @used-by GetKeywordsByIdsRequest
     */
    final class KeywordAdditionalField
    {
        /** Request that the FinalUrlSuffix element be included within each returned Keyword object. */
        const FinalUrlSuffix = 'FinalUrlSuffix';
    }

}
