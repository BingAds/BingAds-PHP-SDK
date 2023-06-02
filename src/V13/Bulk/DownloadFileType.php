<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Defines the file formats for a download request.
     * @link https:/learn.microsoft.com/advertising/bulk-service/downloadfiletype?view=bingads-13 DownloadFileType Value Set
     * 
     * @used-by DownloadCampaignsByAccountIdsRequest
     * @used-by DownloadCampaignsByCampaignIdsRequest
     */
    final class DownloadFileType
    {
        /** The file format is comma separated values (CSV). */
        const Csv = 'Csv';

        /** The file format is tab separated values (TSV). */
        const Tsv = 'Tsv';
    }

}
