<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the possible audience types.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/audiencetype?view=bingads-12 AudienceType Value Set
     * 
     * @used-by Audience
     * @used-by AudienceCriterion
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
    }

}
