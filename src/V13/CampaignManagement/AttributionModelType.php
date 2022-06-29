<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Determines which attribution model, _LastTouch_ or _LastClick_, is used with a conversion goal.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/attributionmodeltype?view=bingads-13 AttributionModelType Value Set
     * 
     * @used-by ConversionGoal
     */
    final class AttributionModelType
    {
        /** View-through conversions are excluded from the "Conversions" column and reported separately under "View-through conversions" and "All conversions." <br /><br />This is the default attribution model type. */
        const LastClick = 'LastClick';

        /** View-through conversion are included in the "Conversions" column. */
        const LastTouch = 'LastTouch';
    }

}
