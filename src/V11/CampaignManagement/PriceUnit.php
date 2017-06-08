<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines price units for price ad extensions.
     * @link http://msdn.microsoft.com/en-us/library/mt807735(v=msads.110).aspx PriceUnit Value Set
     * 
     * @used-by PriceTableRow
     */
    final class PriceUnit
    {
        /** Reserved for forward compatibility. */
        const Unknown = 'Unknown';

        /** The Per Hour price unit text will be appended to the price of the PriceAdExtension, for example $9. */
        const PerHour = 'PerHour';

        /** The Per Day price unit text will be appended to the price of the PriceAdExtension, for example $9. */
        const PerDay = 'PerDay';
        const PerWeek = 'PerWeek';

        /** The Per Month price unit text will be appended to the price of the PriceAdExtension, for example $9. */
        const PerMonth = 'PerMonth';

        /** The Per Year price unit text will be appended to the price of the PriceAdExtension, for example $9. */
        const PerYear = 'PerYear';

        /** The price of the PriceAdExtension will not be appended with price unit text. */
        const None = 'None';

        /** The Per Night price unit text will be appended to the price of the PriceAdExtension, for example $9. */
        const PerNight = 'PerNight';
    }

}
