<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines price units for price ad extensions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/priceunit?view=bingads-13 PriceUnit Value Set
     * 
     * @used-by PriceTableRow
     */
    final class PriceUnit
    {
        /** Reserved for forward compatibility. */
        const Unknown = 'Unknown';

        /** The Per Hour price unit text will be appended to the price of the PriceAdExtension, for example $9.99 Per Hour. */
        const PerHour = 'PerHour';

        /** The Per Day price unit text will be appended to the price of the PriceAdExtension, for example $9.99 Per Day. */
        const PerDay = 'PerDay';

        /** The Per Week price unit text will be appended to the price of the PriceAdExtension, for example $9.99 Per Week. */
        const PerWeek = 'PerWeek';

        /** The Per Month price unit text will be appended to the price of the PriceAdExtension, for example $9.99 Per Month. */
        const PerMonth = 'PerMonth';

        /** The Per Year price unit text will be appended to the price of the PriceAdExtension, for example $9.99 Per Year. */
        const PerYear = 'PerYear';

        /** The price of the PriceAdExtension will not be appended with price unit text. */
        const None = 'None';

        /** The Per Night price unit text will be appended to the price of the PriceAdExtension, for example $9.99 Per Night. */
        const PerNight = 'PerNight';
    }

}
