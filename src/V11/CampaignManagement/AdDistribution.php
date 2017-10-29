<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the ad distribution for the ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addistribution?version=11 AdDistribution Value Set
     * 
     * @used-by AdGroup
     */
    final class AdDistribution
    {
        /** The search network includes Bing. */
        const Search = 'Search';

        /** The content network is the ad distribution network for Bing Ads running in Windows apps. */
        const Content = 'Content';
    }

}
