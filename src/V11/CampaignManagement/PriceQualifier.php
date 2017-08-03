<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines price qualifiers for price ad extensions.
     * @link http://msdn.microsoft.com/en-us/library/mt807733(v=msads.110).aspx PriceQualifier Value Set
     * 
     * @used-by PriceTableRow
     */
    final class PriceQualifier
    {
        /** Reserved for forward compatibility. */
        const Unknown = 'Unknown';

        /** The price of the PriceAdExtension is prefixed with price qualifier text From, for example From $9. */
        const From = 'From';

        /** The price of the PriceAdExtension is prefixed with the price qualifier text Up to, for example Up to $9. */
        const UpTo = 'UpTo';

        /** The price of the PriceAdExtension is not prefixed with price qualifier text. */
        const None = 'None';

        /** The price of the PriceAdExtension is prefixed with price qualifier text Average, for example Average $9. */
        const Average = 'Average';
    }

}
