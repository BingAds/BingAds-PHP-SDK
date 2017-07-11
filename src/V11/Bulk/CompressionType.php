<?php
// Generated on 7/10/2017 3:08:21 PM

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Defines the possible compression types for the file to download.
     * @link http://msdn.microsoft.com/en-us/library/mt179363(v=msads.110).aspx CompressionType Value Set
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
