<?php

namespace Microsoft\BingAds\V10\Bulk;

{
    /**
     * Downloads settings and performance data for the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/jj885756(v=msads.100).aspx DownloadCampaignsByCampaignIds Response Object
     * 
     * @used-by BingAdsBulkService::DownloadCampaignsByCampaignIds
     */
    final class DownloadCampaignsByCampaignIdsResponse
    {
        /**
         * The identifier of the download request.
         * @var string
         */
        public $DownloadRequestId;
    }
}
