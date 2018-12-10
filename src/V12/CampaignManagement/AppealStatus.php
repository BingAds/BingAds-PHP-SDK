<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the values that you use to determine whether an editorial issue is appealable.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/appealstatus?view=bingads-12 AppealStatus Value Set
     * 
     * @used-by EditorialReasonCollection
     */
    final class AppealStatus
    {
        /** The editorial issue is appealable. */
        const Appealable = 'Appealable';

        /** The editorial issue is appealable and an appeal has been submitted. */
        const AppealPending = 'AppealPending';

        /** The editorial issue is not appealable. */
        const NotAppealable = 'NotAppealable';
    }

}
