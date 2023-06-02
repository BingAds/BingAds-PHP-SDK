<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a paging object to request Campaign Management objects in batches.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/paging?view=bingads-13 Paging Data Object
     * 
     * @used-by GetExperimentsByIdsRequest
     * @used-by GetImportResultsRequest
     * @used-by GetLabelAssociationsByLabelIdsRequest
     * @used-by GetLabelsByIdsRequest
     * @used-by GetMediaMetaDataByAccountIdRequest
     * @used-by GetVideosByIdsRequest
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
