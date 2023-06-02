<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible status values of a keyword.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/keywordstatus?view=bingads-13 KeywordStatus Value Set
     * 
     * @used-by Keyword
     */
    final class KeywordStatus
    {
        /** The keyword can be used to match user search queries. */
        const Active = 'Active';

        /** The keyword cannot be used to match user search queries until the owner resumes it. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';

        /** The keyword is undergoing editorial review or has failed editorial review. */
        const Inactive = 'Inactive';
    }

}
