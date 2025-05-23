<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified media meta data from an account's media library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getmediametadatabyids?view=bingads-13 GetMediaMetaDataByIds Request Object
     * 
     * @uses MediaAdditionalField
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
    final class GetMediaMetaDataByIdsRequest
    {
        /**
         * The identifiers of the media to get.
         * @var integer[]
         */
        public $MediaIds;

        /**
         * The list of additional properties that you want included within each returned auction insight KPI.
         * @var MediaAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
