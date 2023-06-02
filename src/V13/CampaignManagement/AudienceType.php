<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible audience types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audiencetype?view=bingads-13 AudienceType Value Set
     * 
     * @used-by Audience
     * @used-by AudienceCriterion
     * @used-by AudienceInfo
     * @used-by GetAudiencesByIdsRequest
     */
    final class AudienceType
    {
        /** The audience is a remarketing list. */
        const RemarketingList = 'RemarketingList';

        /** The audience is a custom audience. */
        const Custom = 'Custom';

        /** The audience is an in-market audience. */
        const InMarket = 'InMarket';

        /** The audience is a product audience. */
        const Product = 'Product';

        /** The audience is a similar remarketing list. */
        const SimilarRemarketingList = 'SimilarRemarketingList';

        /** The audience is a combined list. */
        const CombinedList = 'CombinedList';

        /** Reserved. */
        const CustomerList = 'CustomerList';
    }

}
