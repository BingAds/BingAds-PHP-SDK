<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The source of offline conversion data.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/offlineconversionuploadchannel?view=bingads-13 OfflineConversionUploadChannel Value Set
     * 
     * @used-by GetOfflineConversionReportByGoalIdsRequest
     */
    final class OfflineConversionUploadChannel
    {
        /** The upload channel isn't specified. */
        const Unknown = 'Unknown';

        /** The conversion goal was uploaded via standard API services. */
        const CampaignManagementAPI = 'CampaignManagementAPI';

        /** The conversion goal was uploaded via the Bulk service. */
        const BulkAPI = 'BulkAPI';

        /** The conversion goal was manually uploaded through the Microsoft Advertising web interface. */
        const WebUpload = 'WebUpload';
    }

}
