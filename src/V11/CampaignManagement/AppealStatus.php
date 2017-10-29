<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the values that you use to determine whether an editorial rejection is appealable.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/appealstatus?version=11 AppealStatus Value Set
     * 
     * @used-by EditorialReasonCollection
     */
    final class AppealStatus
    {
        /** The editorial rejection is appealable. */
        const Appealable = 'Appealable';

        /** The editorial rejection is appealable and an appeal has been submitted. */
        const AppealPending = 'AppealPending';

        /** The editorial rejection is not appealable. */
        const NotAppealable = 'NotAppealable';
    }

}
