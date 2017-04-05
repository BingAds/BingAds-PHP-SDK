<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible campaign types.
     * @link http://msdn.microsoft.com/en-us/library/dn913129(v=msads.100).aspx CampaignType Value Set
     * 
     * @used-by Campaign
     * @used-by GetCampaignsByAccountIdRequest
     * @used-by GetCampaignsByIdsRequest
     */
    final class CampaignType
    {
        /** The campaign is a Search and Content campaign. */
        const SearchAndContent = 'SearchAndContent';

        /** The campaign is a Bing Shopping campaign. */
        const Shopping = 'Shopping';

        /** The campaign is a Dynamic Search Ads campaign. */
        const DynamicSearchAds = 'DynamicSearchAds';
    }

}
