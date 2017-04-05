<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Defines the possible formats in which to generate the billing document.
     * @link http://msdn.microsoft.com/en-us/library/ee704172(v=msads.90).aspx DataType Value Set
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
