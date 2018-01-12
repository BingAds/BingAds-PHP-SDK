<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a list of optional Audience properties that you can request when calling GetAudiencesByIds.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/audienceadditionalfield?view=bingads-11 AudienceAdditionalField Value Set
     * 
     * @used-by GetAudiencesByIdsRequest
     */
    final class AudienceAdditionalField
    {
        /** Request that the SearchSize element be included within each returned Audience object. */
        const SearchSize = 'SearchSize';
    }

}
