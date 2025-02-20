<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The type of listing group, for example Subdivision or Unit.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgrouplistingtype?view=bingads-13 AssetGroupListingType Value Set
     * 
     * @used-by AssetGroupListingGroup
     */
    final class AssetGroupListingType
    {
        /** If you are partitioning the products based on more specific product conditions, then set the Sub Type field to Subdivision, the Parent Listing Group Id to null or empty, and the Id to a negative value. */
        const Subdivision = 'Subdivision';

        /** If you are bidding on all products in the catalog equally, set the Sub Type field to Unit. */
        const Unit = 'Unit';
    }

}
