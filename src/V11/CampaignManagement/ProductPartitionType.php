<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible types of product partitions.
     * @link http://msdn.microsoft.com/en-us/library/dn913120(v=msads.110).aspx ProductPartitionType Value Set
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
