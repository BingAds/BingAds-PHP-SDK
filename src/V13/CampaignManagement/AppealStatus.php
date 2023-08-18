<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the values that you use to determine whether an editorial issue is appealable.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/appealstatus?view=bingads-13 AppealStatus Value Set
     * 
     * @used-by AssetGroupEditorialReasonCollection
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
