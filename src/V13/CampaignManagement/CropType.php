<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The crop type applied to the image.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/croptype?view=bingads-13 CropType Value Set
     * 
     * @used-by ImageAsset
     */
    final class CropType
    {
        /** The crop type is manual crop. */
        const ManualCrop = 'ManualCrop';

        /** The crop type is center crop. */
        const CenterCrop = 'CenterCrop';

        /** The crop type is smart crop. */
        const SmartCrop = 'SmartCrop';

        /** The crop type is unkown. */
        const Unknown = 'Unknown';
    }

}
