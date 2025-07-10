<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the device type value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/devicetype?view=bingads-13 DeviceType Value Set
     * 
     * @used-by DataExclusion
     * @used-by DeviceCondition
     * @used-by SeasonalityAdjustment
     */
    final class DeviceType
    {
        /** No devices. */
        const None = 'None';

        /** The device type is Computers. */
        const Computers = 'Computers';

        /** The device type is Smartphones. */
        const Smartphones = 'Smartphones';

        /** The device type is Tablets. */
        const Tablets = 'Tablets';

        /** All devices. */
        const All = 'All';
    }

}
