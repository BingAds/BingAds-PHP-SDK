<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the name of account level properties.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/accountpropertyname?view=bingads-13 AccountPropertyName Value Set
     * 
     * @used-by AccountProperty
     * @used-by GetAccountPropertiesRequest
     */
    final class AccountPropertyName
    {
        /** For internal use only. */
        const None = 'None';

        /** Used to get or set the account's tracking template. */
        const TrackingUrlTemplate = 'TrackingUrlTemplate';

        /** Used to get or set the property that determines whether MSCLKID auto-tagging is enabled for the account. */
        const MSCLKIDAutoTaggingEnabled = 'MSCLKIDAutoTaggingEnabled';

        /** Used to get or set the property that determines whether you want to send customers directly to your final URL while click measurement runs in the background. */
        const AdClickParallelTracking = 'AdClickParallelTracking';

        /** Used to get or set the account's Final URL Suffix. */
        const FinalUrlSuffix = 'FinalUrlSuffix';

        /** Used to get or set the property that determines whether you want to include view-through conversions for campaigns in the account. */
        const IncludeViewThroughConversions = 'IncludeViewThroughConversions';

        /** Used to get or set the property that determines whether LinkedIn profile targeting expansion is enabled for the account. */
        const ProfileExpansionEnabled = 'ProfileExpansionEnabled';

        /** Used to get or set the property that determines whether Microsoft Advertising is allowed to use images from your domain to enhance your ads on the Microsoft Audience Network. */
        const AllowImageAutoRetrieve = 'AllowImageAutoRetrieve';

        /** Used to get or set the property that determines whether Microsoft Advertising is allowed to automatically apply ad recommendations meant to help you boost ad performance. */
        const AutoApplyRecommendations = 'AutoApplyRecommendations';

        /** Include auto bidding view through conversions. */
        const IncludeAutoBiddingViewThroughConversions = 'IncludeAutoBiddingViewThroughConversions';

        /** The weight of the auto bidding view through conversions value attribution. */
        const AutoBiddingViewThroughConversionsValueAttributionWeight = 'AutoBiddingViewThroughConversionsValueAttributionWeight';

        /** The loopback window for view through conversions. */
        const LoopBackWindowForViewThroughConversions = 'LoopBackWindowForViewThroughConversions';

        /** Used to get or set the property that determines the account's business attributes meant to help you boost ad performance. */
        const BusinessAttributes = 'BusinessAttributes';

        /** Enable Microsoft Monitring Agent under dynamic search ads ad groups. */
        const EnableMMAUnderDSAAdgroups = 'EnableMMAUnderDSAAdgroups';

        /** The output from Microsoft Configuration Manager. */
        const OptOutFromMCM = 'OptOutFromMCM';

        /** The Netflix terms and conditions are accepted. */
        const NetflixTCAccepted = 'NetflixTCAccepted';

        /** The segments that advertisers can block. */
        const BlockedContentSegments = 'BlockedContentSegments';

        /** Reserved. */
        const AssetAIEnhancementOptout = 'AssetAIEnhancementOptout';
    }

}
