<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a website placement bid.
     * @link http://msdn.microsoft.com/en-us/library/dd797248(v=msads.100).aspx SitePlacement Data Object
     * 
     * @uses Bid
     * @uses SitePlacementStatus
     * @used-by AddSitePlacementsRequest
     * @used-by GetSitePlacementsByAdGroupIdResponse
     * @used-by GetSitePlacementsByIdsResponse
     * @used-by UpdateSitePlacementsRequest
     */
    final class SitePlacement
    {
        public $Bid;
        public $Id;
        public $PlacementId;
        public $Status;
        public $Url;
    }

}
