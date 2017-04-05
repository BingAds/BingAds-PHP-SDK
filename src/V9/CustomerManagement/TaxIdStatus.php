<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines the possible status values of an account's tax identifier.
     * @link http://msdn.microsoft.com/en-us/library/mt650904(v=msads.90).aspx TaxIdStatus Value Set
     * 
     * @used-by AdvertiserAccount
     */
    final class TaxIdStatus
    {
        /** The tax identifier is valid. */
        const Valid = 'Valid';

        /** The tax identifier is not valid. */
        const Invalid = 'Invalid';

        /** The tax identifier is being verified. */
        const Pending = 'Pending';

        /** The tax identifier could not be verified. */
        const Inactive = 'Inactive';
    }

}
