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

        /** Request that the AdScheduleUseSearcherTimezone element be included within each returned GoogleImportOption object. */
        const AdScheduleUseSearcherTimezone = 'AdScheduleUseSearcherTimezone';

        /** Request that the NewImageAdExtensions element be included within each returned GoogleImportOption object. */
        const NewImageAdExtensions = 'NewImageAdExtensions';

        /** Request that the UpdateImageAdExtensions element be included within each returned GoogleImportOption object. */
        const UpdateImageAdExtensions = 'UpdateImageAdExtensions';

        /** Request that the SearchAndReplaceForFinalURLSuffix element be included within each returned GoogleImportOption object. */
        const SearchAndReplaceForFinalURLSuffix = 'SearchAndReplaceForFinalURLSuffix';

        /** Request that the RenameCampaignNameWithSuffix element be included within each returned GoogleImportOption object. */
        const RenameCampaignNameWithSuffix = 'RenameCampaignNameWithSuffix';

        /** Request that the UpdateAdUrls element be included within each returned GoogleImportOption object. */
        const UpdateAdUrls = 'UpdateAdUrls';

        /** Request that the NewLogoAdExtensions element be included within each returned GoogleImportOption object. */
        const NewLogoAdExtensions = 'NewLogoAdExtensions';

        /** Request that the UpdateLogoAdExtensions element be included within each returned GoogleImportOption object. */
        const UpdateLogoAdExtensions = 'UpdateLogoAdExtensions';

        /** Request that the UpdateSitelinkUrls element be included within each returned GoogleImportOption object. */
        const UpdateSitelinkUrls = 'UpdateSitelinkUrls';

        /** Request that the NewLeadFormAdExtensions element be included within each returned GoogleImportOption object. */
        const NewLeadFormAdExtensions = 'NewLeadFormAdExtensions';

        /** Request that the UpdateLeadFormAdExtensions element be included within each returned GoogleImportOption object. */
        const UpdateLeadFormAdExtensions = 'UpdateLeadFormAdExtensions';

        /** Request that the NewAccountNegativeKeywords element be included within each returned GoogleImportOption object. */
        const NewAccountNegativeKeywords = 'NewAccountNegativeKeywords';

        /** Request that the UpdateAccountNegativeKeywords element be included within each returned GoogleImportOption object. */
        const UpdateAccountNegativeKeywords = 'UpdateAccountNegativeKeywords';

        /** Request that the UpdateAdCustomizerAttributes element be included within each returned GoogleImportOption object. */
        const UpdateAdCustomizerAttributes = 'UpdateAdCustomizerAttributes';
    }

}
