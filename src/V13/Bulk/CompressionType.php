<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Defines the possible compression types for the file to download with the Bulk service.
     * @link https:/learn.microsoft.com/advertising/bulk-service/compressiontype?view=bingads-13 CompressionType Value Set
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
