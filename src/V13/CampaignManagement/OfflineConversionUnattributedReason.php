<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Indicates why a conversion failed to be attributed.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/offlineconversionunattributedreason?view=bingads-13 OfflineConversionUnattributedReason Value Set
     * 
     * @used-by OfflineConversionAlert
     */
    final class OfflineConversionUnattributedReason
    {
        /** The error is unspecified. */
        const Unknown = 'Unknown';

        /** The record is an adjustment (restate or retract) but the corresponding original conversion record doesn't exist. */
        const AdjustmentOriginalNotFound = 'AdjustmentOriginalNotFound';

        /** The conversion record has already been retracted. */
        const ConversionAlreadyRetracted = 'ConversionAlreadyRetracted';

        /** Duplicate keys are detected (MsClickId, ConversionName, ConversionTime, HashedEmailAddress, HashedPhoneNumber), or a record with the same key has already been successfully attributed. */
        const DuplicateConversionKey = 'DuplicateConversionKey';

        /** The conversion time is older than 90 days. */
        const ConversionTimeExceedsMaxLookback = 'ConversionTimeExceedsMaxLookback';

        /** The conversion time is in the future. */
        const ConversionTimeInFuture = 'ConversionTimeInFuture';

        /** No matching goal exists for the conversion name, or the associated goal is inactive. */
        const GoalNotFoundOrInactive = 'GoalNotFoundOrInactive';

        /** The click time is after the conversion time. */
        const ClickTimestampAfterConversion = 'ClickTimestampAfterConversion';

        /** No matching click could be found based on MsClickId, HashedEmailAddress, or HashedPhoneNumber. */
        const NoMatchingClickFound = 'NoMatchingClickFound';

        /** MsClickId is empty, and although HashedEmailAddress or HashedPhoneNumber is provided, no click could be found via enhanced conversions. */
        const MissingMatchIdentifiers = 'MissingMatchIdentifiers';

        /** Click falls outside the lookback window defined in the goal settings. */
        const OutsideGoalLookbackWindow = 'OutsideGoalLookbackWindow';

        /** Matching clicks were found, but all clicks are from other accounts. */
        const AccountMismatch = 'AccountMismatch';

        /** The upload contains malformed data or characters that prevent processing. */
        const MalformedData = 'MalformedData';

        /** Original conversion exists, but the associated click is older than 90 days. */
        const HistoricalClickDataExpired = 'HistoricalClickDataExpired';
    }

}
