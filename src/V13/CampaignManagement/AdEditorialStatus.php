<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the editorial review status values of an ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adeditorialstatus?view=bingads-13 AdEditorialStatus Value Set
     * 
     * @used-by Ad
     * @used-by GetAdsByEditorialStatusRequest
     */
    final class AdEditorialStatus
    {
        /** The ad passed editorial review. */
        const Active = 'Active';

        /** The ad failed editorial review. */
        const Disapproved = 'Disapproved';

        /** One or more elements of the ad is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The ad passed editorial review in one or more markets, and one or more elements of the ad is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

}
