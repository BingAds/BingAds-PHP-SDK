<?php

namespace Microsoft\BingAds\V12\CustomerBilling;

{
    /**
     * Defines the possible formats in which to generate the billing document.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/datatype?view=bingads-12 DataType Value Set
     * 
     * @used-by BillingDocument
     * @used-by GetBillingDocumentsRequest
     */
    final class DataType
    {
        /** Use XML format. */
        const Xml = 'Xml';

        /** Use PDF format. */
        const Pdf = 'Pdf';
    }

}
