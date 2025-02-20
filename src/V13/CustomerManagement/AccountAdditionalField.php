<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines a list of optional account properties that you can request when calling GetAccount, FindAccountsOrCustomersInfo, and SearchAccounts.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/accountadditionalfield?view=bingads-13 AccountAdditionalField Value Set
     * 
     * @used-by FindAccountsOrCustomersInfoRequest
     * @used-by GetAccountRequest
     * @used-by SearchAccountsRequest
     */
    final class AccountAdditionalField
    {
        /** Request that the TaxCertificate element be included within each returned AdvertiserAccount object. */
        const TaxCertificate = 'TaxCertificate';

        /** Request that the AccountMode element be included within each returned AdvertiserAccount or AccountInfoWithCustomerData object. */
        const AccountMode = 'AccountMode';

        /** Request that the CouponClaimInfo element be included within each returned AdvertiserAccount object. */
        const CouponClaimInfo = 'CouponClaimInfo';
    }

}
