<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the supported import entity types.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/importentitytype?view=bingads-13 ImportEntityType Value Set
     * 
     * @used-by GetImportEntityIdsMappingRequest
     */
    final class ImportEntityType
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** The import entity is a campaign. */
        const Campaign = 'Campaign';

        /** Reserved. */
        const AdGroup = 'AdGroup';

        /** Reserved. */
        const Ad = 'Ad';

        /** Reserved. */
        const Keyword = 'Keyword';
    }

}
