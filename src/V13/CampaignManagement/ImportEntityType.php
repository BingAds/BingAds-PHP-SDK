<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the supported import entity types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/importentitytype?view=bingads-13 ImportEntityType Value Set
     * 
     * @used-by GetImportEntityIdsMappingRequest
     */
    final class ImportEntityType
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** The import entity is a campaign. */
        const Campaign = 'Campaign';

        /** The import entity is an ad group. */
        const AdGroup = 'AdGroup';

        /** The import entity is an ad. */
        const Ad = 'Ad';

        /** The import entity is a keyword. */
        const Keyword = 'Keyword';
    }

}
