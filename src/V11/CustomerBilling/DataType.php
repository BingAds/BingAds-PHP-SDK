<?php
// Generated on 5/7/2017 5:48:14 AM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines the possible formats in which to generate the billing document.
     * @link http://msdn.microsoft.com/en-us/library/ee704172(v=msads.110).aspx DataType Value Set
     * 
     * @used-by BillingDocument
     * @used-by GetBillingDocumentsRequest
     * @used-by GetDisplayInvoicesRequest
     */
    final class DataType
    {
        /** Use XML format. */
        const Xml = 'Xml';

        /** Use PDF format. */
        const Pdf = 'Pdf';
    }

}
