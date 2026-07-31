<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a value set for the type of device.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/deviceenum?view=bingads-13 DeviceEnum Value Set
     * 
     * @used-by SelectionOfDeviceEnum
     */
    final class DeviceEnum
    {
        /** The device is a desktop computer. */
        const Desktop = 'Desktop';

        /** The device is a smartphone. */
        const Smartphone = 'Smartphone';

        /** The device is a tablet. */
        const Tablet = 'Tablet';
    }

}
