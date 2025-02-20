<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible compression types for the file to download with the Campaign Management service.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/compressiontype?view=bingads-13 CompressionType Value Set
     * 
     * @used-by GetGeoLocationsFileUrlRequest
     */
    final class CompressionType
    {
        /** Reserved for future use. */
        const Zip = 'Zip';

        /** The file should be GZip compressed. */
        const GZip = 'GZip';
    }

}
