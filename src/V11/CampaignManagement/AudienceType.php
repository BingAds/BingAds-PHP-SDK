<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible audience types.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/audiencetype?view=bingads-11 AudienceType Value Set
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
    }

}
