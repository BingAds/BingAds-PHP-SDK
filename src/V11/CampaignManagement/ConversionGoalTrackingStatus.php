<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible system-determined status values of a conversion goal.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/conversiongoaltrackingstatus?view=bingads-11 ConversionGoalTrackingStatus Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalTrackingStatus
    {
        /** The UetTagTrackingStatus is Unverified, and Bing Ads hasn't received any user activity data from the UET tag on your website. */
        const TagUnverified = 'TagUnverified';

        /** The UetTagTrackingStatus is Active, but we haven't recorded any conversions in the last 7 days. */
        const NoRecentConversions = 'NoRecentConversions';

        /** The UetTagTrackingStatus is Active, and we have recorded conversions within the last 7 days. */
        const RecordingConversions = 'RecordingConversions';

        /** The UetTagTrackingStatus is Inactive, and Bing Ads has not received any user activity data from the UET tag in the last 24 hours. */
        const TagInactive = 'TagInactive';
    }

}
