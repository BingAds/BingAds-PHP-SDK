<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible values that indicate whether all or a subset of an ad group's existing keywords are used to determine the bid landscape.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/adgroupbidlandscapetype?view=bingads-11 AdGroupBidLandscapeType Value Set
     * 
     * @used-by AdGroupBidLandscape
     * @used-by AdGroupBidLandscapeInput
     */
    final class AdGroupBidLandscapeType
    {
        /** All of an ad group's existing keywords are used to determine the bid landscape. */
        const Uniform = 'Uniform';

        /** Only existing keywords that use the ad group's default bid are used to determine the bid landscape. */
        const DefaultBidOnly = 'DefaultBidOnly';
    }

}
