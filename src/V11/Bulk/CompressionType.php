<?php

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Defines the possible compression types for the file to download.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/compressiontype?view=bingads-11 CompressionType Value Set
     * 
     * @used-by DownloadCampaignsByAccountIdsRequest
     * @used-by DownloadCampaignsByCampaignIdsRequest
     */
    final class CompressionType
    {
        /** The file should be ZIP compressed. */
        const Zip = 'Zip';

        /** The file should be GZIP compressed. */
        const GZip = 'GZip';
    }

}
