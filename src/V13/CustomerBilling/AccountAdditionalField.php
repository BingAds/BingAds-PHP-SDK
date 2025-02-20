<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines a value set for additional account fields.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/accountadditionalfield?view=bingads-13 AccountAdditionalField Value Set
     * 
     * @used-by SearchCouponsRequest
     */
    final class AccountAdditionalField
    {
        /** Return TaxCertificate in the response. */
        const TaxCertificate = 'TaxCertificate';

        /** Return AccountMode in the response. */
        const AccountMode = 'AccountMode';

        /** Return CouponClaimInfo in the response. */
        const CouponClaimInfo = 'CouponClaimInfo';
    }

}
