<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional audience properties that you can request when calling GetAudiencesByIds.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audienceadditionalfield?view=bingads-13 AudienceAdditionalField Value Set
     * 
     * @used-by GetAudiencesByIdsRequest
     */
    final class AudienceAdditionalField
    {
        /** Request that the NormalForm element be included within each returned PageVisitorsRule object. */
        const NormalForm = 'NormalForm';

        /** Reserved. */
        const NumberRuleItem = 'NumberRuleItem';
    }

}
