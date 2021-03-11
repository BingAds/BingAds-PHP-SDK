<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional import properties that you can request when calling GetImportJobsByIds and GetImportResults.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/importadditionalfield?view=bingads-13 ImportAdditionalField Value Set
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

        /** Reserved. */
        const ActiveAdGroupsOnly = 'ActiveAdGroupsOnly';
    }

}
