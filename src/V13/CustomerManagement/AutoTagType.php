<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines possible values for an account level setting that determines whether to append or replace the supported UTM tracking codes.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/autotagtype?view=bingads-13 AutoTagType Value Set
     * 
     * @used-by AdvertiserAccount
     */
    final class AutoTagType
    {
        /** Microsoft Advertising will not append any UTM tracking codes to your ad or keyword final URL. */
        const Inactive = 'Inactive';

        /** Microsoft Advertising will automatically append the supported UTM tracking codes, and preserve any existing UTM tracking codes that you added to your ad or keyword's final URL. */
        const Preserve = 'Preserve';

        /** Microsoft Advertising will automatically append the supported UTM tracking codes, and replace any of the existing and supported UTM tracking codes that you added to your ad or keyword's final URL. */
        const Replace = 'Replace';
    }

}
