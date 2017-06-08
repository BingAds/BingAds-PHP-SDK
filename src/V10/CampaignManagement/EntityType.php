<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible types of entities.
     * @link http://msdn.microsoft.com/en-us/library/jj622172(v=msads.100).aspx EntityType Value Set
     * 
     * @used-by AppealEditorialRejectionsRequest
     * @used-by GetEditorialReasonsByIdsRequest
     */
    final class EntityType
    {
        /** Reserved for future use. */
        const Campaign = 'Campaign';

        /** Reserved for future use. */
        const AdGroup = 'AdGroup';

        /** Reserved for future use. */
        const Target = 'Target';

        /** Request editorial appeal or status for ads. */
        const Ad = 'Ad';

        /** Request editorial appeal or status for keywords. */
        const Keyword = 'Keyword';

        /** Reserved for future use. */
        const AdExtension = 'AdExtension';
        const AdGroupCriterion = 'AdGroupCriterion';
    }

}
