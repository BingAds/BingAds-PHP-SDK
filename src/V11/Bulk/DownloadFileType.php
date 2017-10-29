<?php

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Defines the file formats for a download request.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/downloadfiletype?version=11 DownloadFileType Value Set
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
