<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the editorial review status values of an ad.
     * @link http://msdn.microsoft.com/en-us/library/cc565084(v=msads.100).aspx AdEditorialStatus Value Set
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
