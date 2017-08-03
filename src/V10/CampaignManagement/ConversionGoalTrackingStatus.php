<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible system-determined status values of a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759558(v=msads.100).aspx ConversionGoalTrackingStatus Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalTrackingStatus
    {
        const TagUnverified = 'TagUnverified';
        const NoRecentConversions = 'NoRecentConversions';
        const RecordingConversions = 'RecordingConversions';
        const TagInactive = 'TagInactive';
    }

}
