<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional import properties that you can request when calling GetImportJobsByIds and GetImportResults.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/importadditionalfield?view=bingads-13 ImportAdditionalField Value Set
     * 
     * @used-by GetImportJobsByIdsRequest
     * @used-by GetImportResultsRequest
     */
    final class ImportAdditionalField
    {
        /** Reserved for internal use. */
        const None = 'None';

        /** Request that the NotificationEmail element be included within each returned GoogleImportJob object. */
        const NotificationEmail = 'NotificationEmail';

        /** Request that the AutoDeviceBidOptimization element be included within each returned GoogleImportOption object. */
        const AutoDeviceBidOptimization = 'AutoDeviceBidOptimization';

        /** Request that the ActiveAdGroupsOnly element be returned within the CampaignAdGroupIds element of each returned GoogleImportJob object. */
        const ActiveAdGroupsOnly = 'ActiveAdGroupsOnly';

        /** Request that the SearchAndReplaceForCustomParameters element be included within each returned GoogleImportOption object. */
        const SearchAndReplaceForCustomParameters = 'SearchAndReplaceForCustomParameters';

        /** Reserved. */
        const AdScheduleUseSearcherTimezone = 'AdScheduleUseSearcherTimezone';

        /** Reserved. */
        const NewImageAdExtensions = 'NewImageAdExtensions';

        /** Reserved. */
        const UpdateImageAdExtensions = 'UpdateImageAdExtensions';

        /** Reserved. */
        const SearchAndReplaceForFinalURLSuffix = 'SearchAndReplaceForFinalURLSuffix';

        /** Reserved. */
        const RenameCampaignNameWithSuffix = 'RenameCampaignNameWithSuffix';

        /** Reserved. */
        const UpdateAdUrls = 'UpdateAdUrls';
    }

}
