<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a Universal Event Tracking (UET) tag that you can add to your website to allow Bing Ads to collect actions people take on your website.
     * @link http://msdn.microsoft.com/en-us/library/mt759552(v=msads.110).aspx UetTag Data Object
     * 
     * @uses UetTagTrackingStatus
     * @used-by AddUetTagsRequest
     * @used-by AddUetTagsResponse
     * @used-by GetUetTagsByIdsResponse
     * @used-by UpdateUetTagsRequest
     */
    final class UetTag
    {
        public $Description;
        public $Id;
        public $Name;
        public $TrackingNoScript;
        public $TrackingScript;
        public $TrackingStatus;
    }

}
