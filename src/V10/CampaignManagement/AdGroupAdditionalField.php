<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a list of optional AdGroup elements that you can request when calling GetAdGroupsByCampaignId and GetAdGroupsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt709095(v=msads.100).aspx AdGroupAdditionalField Value Set
     * 
     * @used-by GetAdGroupsByCampaignIdRequest
     * @used-by GetAdGroupsByIdsRequest
     */
    final class AdGroupAdditionalField
    {
        /** Includes the BiddingScheme element in the AdGroup object. */
        const BiddingScheme = 'BiddingScheme';

        /** Includes the RemarketingTargetingSetting element in the AdGroup object. */
        const RemarketingTargetingSetting = 'RemarketingTargetingSetting';
    }

}
