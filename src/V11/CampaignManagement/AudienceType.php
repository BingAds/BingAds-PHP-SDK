<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible audience types.
     * @link http://msdn.microsoft.com/en-us/library/mt807670(v=msads.110).aspx AudienceType Value Set
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
