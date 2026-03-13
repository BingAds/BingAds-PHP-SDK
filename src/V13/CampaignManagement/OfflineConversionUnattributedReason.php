<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/offlineconversionunattributedreason?view=bingads-13 OfflineConversionUnattributedReason Value Set
     * 
     * @used-by OfflineConversionAlert
     */
    final class OfflineConversionUnattributedReason
    {
        /** Reserved. */
        const Unknown = 'Unknown';

        /** Reserved. */
        const AdjustmentOriginalNotFound = 'AdjustmentOriginalNotFound';

        /** Reserved. */
        const ConversionAlreadyRetracted = 'ConversionAlreadyRetracted';

        /** Reserved. */
        const DuplicateConversionKey = 'DuplicateConversionKey';

        /** Reserved. */
        const ConversionTimeExceedsMaxLookback = 'ConversionTimeExceedsMaxLookback';

        /** Reserved. */
        const ConversionTimeInFuture = 'ConversionTimeInFuture';

        /** Reserved. */
        const GoalNotFoundOrInactive = 'GoalNotFoundOrInactive';

        /** Reserved. */
        const ClickTimestampAfterConversion = 'ClickTimestampAfterConversion';

        /** Reserved. */
        const NoMatchingClickFound = 'NoMatchingClickFound';

        /** Reserved. */
        const MissingMatchIdentifiers = 'MissingMatchIdentifiers';

        /** Reserved. */
        const OutsideGoalLookbackWindow = 'OutsideGoalLookbackWindow';

        /** Reserved. */
        const AccountMismatch = 'AccountMismatch';

        /** Reserved. */
        const MalformedData = 'MalformedData';

        /** Reserved. */
        const HistoricalClickDataExpired = 'HistoricalClickDataExpired';
    }

}
