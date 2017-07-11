<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible campaign types.
     * @link http://msdn.microsoft.com/en-us/library/dn913129(v=msads.110).aspx CampaignType Value Set
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
