<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a paging object that you can use to request labels and label associations in batches.
     * @link http://msdn.microsoft.com/en-us/library/mt803295(v=msads.110).aspx Paging Data Object
     * 
     * @used-by GetLabelAssociationsByLabelIdsRequest
     * @used-by GetLabelsByIdsRequest
     */
    final class Paging
    {
        /**
         * The zero-based results page index.
         * @var integer
         */
        public $Index;

        /**
         * The page size and the number of results to return in the specified page.
         * @var integer
         */
        public $Size;
    }

}
