<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines a value set for additional insertion order fields.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/insertionorderadditionalfield?view=bingads-13 InsertionOrderAdditionalField Value Set
     * 
     * @used-by SearchInsertionOrdersRequest
     */
    final class InsertionOrderAdditionalField
    {
        /** Reserved. */
        const None = 'None';

        /** Return IsUnlimited and IsEndless in the response. */
        const UnlimitedAndEndlessFlags = 'UnlimitedAndEndlessFlags';
    }

}
