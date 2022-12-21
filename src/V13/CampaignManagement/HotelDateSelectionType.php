<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Possible hotel date selection types.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/hoteldateselectiontype?view=bingads-13 HotelDateSelectionType Value Set
     * 
     * @used-by HotelDateSelectionTypeCriterion
     */
    final class HotelDateSelectionType
    {
        /** Returned when the value is unknown. */
        const Unknown = 'Unknown';

        /** The dates selected by default. */
        const DefaultSelection = 'DefaultSelection';

        /** The dates selected by the user. */
        const UserSelection = 'UserSelection';
    }

}
