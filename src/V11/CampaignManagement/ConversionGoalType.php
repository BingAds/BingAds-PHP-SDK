<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the current possible types of conversion goals.
     * @link http://msdn.microsoft.com/en-us/library/mt759557(v=msads.110).aspx ConversionGoalType Value Set
     * 
     * @used-by ConversionGoal
     * @used-by GetConversionGoalsByIdsRequest
     * @used-by GetConversionGoalsByTagIdsRequest
     */
    final class ConversionGoalType
    {
        /** Refers to a UrlGoal */
        const Url = 'Url';

        /** Refers to a DurationGoal */
        const Duration = 'Duration';

        /** Refers to a PagesViewedPerVisitGoal */
        const PagesViewedPerVisit = 'PagesViewedPerVisit';

        /** Refers to an EventGoal */
        const Event = 'Event';

        /** Refers to an AppInstallGoal */
        const AppInstall = 'AppInstall';

        /** Refers to an OfflineConversion */
        const OfflineConversion = 'OfflineConversion';
    }

}
