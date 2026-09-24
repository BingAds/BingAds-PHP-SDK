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
        /** Request that the AssetGroupSearchThemes element be included within each returned AssetGroup object. */
        const AssetGroupSearchThemes = 'AssetGroupSearchThemes';

        /** Request that the AssetGroupUrlTargets element be included within each returned AssetGroup object. */
        const AssetGroupUrlTargets = 'AssetGroupUrlTargets';

        /** Request that the TrackingUrlTemplate element be included within each returned AssetGroup object. */
        const TrackingUrlTemplate = 'TrackingUrlTemplate';

        /** Request that the FinalUrlSuffix element be included within each returned AssetGroup object. */
        const FinalUrlSuffix = 'FinalUrlSuffix';

        /** Request that the UrlCustomParameters element be included within each returned AssetGroup object. */
        const UrlCustomParameters = 'UrlCustomParameters';

        /** Request that the CroppingType element be included within each returned AssetGroup object. */
        const CroppingType = 'CroppingType';

        /** Request that the unified campaign fields are included with each returned Campaign object. */
        const UnifiedCampaignFields = 'UnifiedCampaignFields';
    }

}
