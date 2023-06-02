<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that contains the negative site URLs of an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adgroupnegativesites?view=bingads-13 AdGroupNegativeSites Data Object
     * 
     * @used-by GetNegativeSitesByAdGroupIdsResponse
     * @used-by SetNegativeSitesToAdGroupsRequest
     */
    final class AdGroupNegativeSites
    {
        /**
         * The identifier of the ad group to which the negative site URLs belong.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A list of URLs of the websites where you do not want your ads displayed.
         * @var string[]
         */
        public $NegativeSites;
    }

}
