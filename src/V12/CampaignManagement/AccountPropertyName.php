<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the name of account level properties.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/accountpropertyname?view=bingads-12 AccountPropertyName Value Set
     * 
     * @used-by AccountProperty
     * @used-by GetAccountPropertiesRequest
     */
    final class AccountPropertyName
    {
        /** Reserved for internal use. */
        const None = 'None';

        /** Used to get or set the account's tracking template. */
        const TrackingUrlTemplate = 'TrackingUrlTemplate';

        /** Used to get or set the property that determines whether MSCLKID auto-tagging is enabled for the account. */
        const MSCLKIDAutoTaggingEnabled = 'MSCLKIDAutoTaggingEnabled';
    }

}
