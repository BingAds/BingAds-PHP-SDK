<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The app store the mobile app is distributed in.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/appstore?view=bingads-13 AppStore Value Set
     * 
     * @used-by AppSetting
     */
    final class AppStore
    {
        /** The app is distributed in the Google app store. */
        const GoogleAppStore = 'GoogleAppStore';

        /** The app is distributed in the Apple app store. */
        const AppleAppStore = 'AppleAppStore';

        /** The app is distributed in the Microsoft app store. */
        const MicrosoftAppStore = 'MicrosoftAppStore';
    }

}
