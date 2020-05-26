<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional campaign properties that you can request when calling GetCampaignsByAccountId and GetCampaignsByIds.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/campaignadditionalfield?view=bingads-13 CampaignAdditionalField Value Set
     * 
     * @used-by GetCampaignsByAccountIdRequest
     * @used-by GetCampaignsByIdsRequest
     */
    final class CampaignAdditionalField
    {
        /** Request that the AdScheduleUseSearcherTimeZone element be included within each returned Campaign object. */
        const AdScheduleUseSearcherTimeZone = 'AdScheduleUseSearcherTimeZone';

        /** Reserved. */
        const MaxConversionValueBiddingScheme = 'MaxConversionValueBiddingScheme';
    }

}
