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

        /** Defines a rule expression that depends on the operand, operator, and value. */
        const NumberRuleItem = 'NumberRuleItem';

        /** Request that the ImpressionBasedRemarketingList element be included when you call the GetAudiencesByIds service operation. */
        const ImpressionBasedRemarketingList = 'ImpressionBasedRemarketingList';
    }

}
