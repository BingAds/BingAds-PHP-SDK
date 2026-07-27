<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional conversion goal properties that you can request when calling GetConversionGoalsByIds and GetConversionGoalsByTagIds.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversiongoaladditionalfield?view=bingads-13 ConversionGoalAdditionalField Value Set
     * 
     * @used-by GetConversionGoalsByIdsRequest
     * @used-by GetConversionGoalsByTagIdsRequest
     */
    final class ConversionGoalAdditionalField
    {
        /** Request that the ViewThroughConversionWindowInMinutes element be included within each returned ConversionGoal object. */
        const ViewThroughConversionWindowInMinutes = 'ViewThroughConversionWindowInMinutes';

        /** Request that the IsExternallyAttributed element be included within each returned OfflineConversionGoal object. */
        const IsExternallyAttributed = 'IsExternallyAttributed';

        /** Request that the GoalCategory element be included within each returned ConversionGoal object. */
        const GoalCategory = 'GoalCategory';

        /** Request that the InactiveDueToTagUnavailable value be included within each returned ConversionGoal object. */
        const InactiveDueToTagUnavailable = 'InactiveDueToTagUnavailable';

        /** Determines which attribution model, LastTouch, LastClick, or DataDriven is used with a conversion goal. */
        const AttributionModelType = 'AttributionModelType';

        /** Determines whether enhanced conversions are enabled for a conversion goal. */
        const IsEnhancedConversionsEnabled = 'IsEnhancedConversionsEnabled';

        /** Request that the IsAutoGoal element be included within each returned ConversionGoal object. */
        const IsAutoGoal = 'IsAutoGoal';

        /** Request that the DataDriven element be included within each returned AttributionModelType object. */
        const DataDrivenAttribute = 'DataDrivenAttribute';

        /** Request that the AppDownload value be included within each returned ConversionGoalType object. */
        const ApplicationDownloadGoal = 'ApplicationDownloadGoal';
    }

}
