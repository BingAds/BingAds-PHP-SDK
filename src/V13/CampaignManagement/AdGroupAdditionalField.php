<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional ad group properties that you can request when calling GetAdGroupsByCampaignId and GetAdGroupsByIds.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adgroupadditionalfield?view=bingads-13 AdGroupAdditionalField Value Set
     * 
     * @used-by GetAdGroupsByCampaignIdRequest
     * @used-by GetAdGroupsByIdsRequest
     */
    final class AdGroupAdditionalField
    {
        /** Request that the AdScheduleUseSearcherTimeZone element be included within each returned AdGroup object. */
        const AdScheduleUseSearcherTimeZone = 'AdScheduleUseSearcherTimeZone';

        /** Request that the AdGroupType element be included within each returned AdGroup object. */
        const AdGroupType = 'AdGroupType';

        /** Request that the CpvBid element be included within each returned AdGroup object. */
        const CpvBid = 'CpvBid';

        /** Request that the CpmBid element be included within each returned AdGroup object. */
        const CpmBid = 'CpmBid';

        /** Request that the MultimediaAdsBidAdjustment element be included within each returned AdGroup object. */
        const MultimediaAdsBidAdjustment = 'MultimediaAdsBidAdjustment';

        /** Reserved. */
        const CommissionRate = 'CommissionRate';

        /** Reserved. */
        const PercentCpcBid = 'PercentCpcBid';

        /** Reserved. */
        const McpaBid = 'McpaBid';

        /** Indicates if predictive targeting is enabled for an AdGroup. */
        const UseOptimizedTargeting = 'UseOptimizedTargeting';

        /** Settings for the frequency cap. */
        const FrequencyCapSettings = 'FrequencyCapSettings';
    }

}
