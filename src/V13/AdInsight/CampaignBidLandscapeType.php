<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the possible types of campaign bid landscapes.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/campaignbidlandscapetype?view=bingads-13 CampaignBidLandscapeType Value Set
     * 
     * @used-by CampaignBidLandscape
     */
    final class CampaignBidLandscapeType
    {
        /** The campaign landscape type is Ecpc_CampaignWideBid. */
        const Ecpc_CampaignWideBid = 'Ecpc_CampaignWideBid';

        /** The campaign landscape type is Ecpc_BidScaling. */
        const Ecpc_BidScaling = 'Ecpc_BidScaling';

        /** The bid strategy type is TargetCpa. */
        const TargetCpa = 'TargetCpa';

        /** The bid strategy type is TargetRoas. */
        const TargetRoas = 'TargetRoas';
    }

}
