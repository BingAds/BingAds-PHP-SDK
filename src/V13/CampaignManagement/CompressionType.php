<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible compression types for the file to download.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/compressiontype?view=bingads-13 CompressionType Value Set
     * 
     * @used-by GetGeoLocationsFileUrlRequest
     */
    final class CompressionType
    {
        /** Reserved. */
        const Zip = 'Zip';

        /** The file should be GZIP compressed. */
        const GZip = 'GZip';
    }

}
