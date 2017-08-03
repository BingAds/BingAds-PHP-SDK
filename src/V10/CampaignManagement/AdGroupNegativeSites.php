<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an object that contains the negative site URLs of an ad group.
     * @link http://msdn.microsoft.com/en-us/library/hh300117(v=msads.100).aspx AdGroupNegativeSites Data Object
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
         * A list of URLs of the websites on which you do not want your ads displayed.
         * @var string[]
         */
        public $NegativeSites;
    }

}
