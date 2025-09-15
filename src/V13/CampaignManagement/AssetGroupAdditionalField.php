<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible additional fields for an asset group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgroupadditionalfield?view=bingads-13 AssetGroupAdditionalField Value Set
     * 
     * @used-by GetAssetGroupsByCampaignIdRequest
     * @used-by GetAssetGroupsByIdsRequest
     */
    final class AssetGroupAdditionalField
    {
        /** Include the AssetGroupSearchThemes field. */
        const AssetGroupSearchThemes = 'AssetGroupSearchThemes';

        /** Reserved. */
        const AssetGroupUrlTargets = 'AssetGroupUrlTargets';

        /** Reserved. */
        const TrackingUrlTemplate = 'TrackingUrlTemplate';

        /** Reserved. */
        const FinalUrlSuffix = 'FinalUrlSuffix';

        /** Reserved. */
        const UrlCustomParameters = 'UrlCustomParameters';
    }

}
