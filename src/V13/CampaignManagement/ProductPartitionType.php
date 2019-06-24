<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of product partitions.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/productpartitiontype?view=bingads-13 ProductPartitionType Value Set
     * 
     * @used-by ProductPartition
     */
    final class ProductPartitionType
    {
        /** The ProductPartition is a product group subdivision. */
        const Subdivision = 'Subdivision';

        /** The ProductPartition is a product group unit. */
        const Unit = 'Unit';
    }

}
