<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible types of ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/jj689543(v=msads.100).aspx CriterionType Value Set
     * 
     * @used-by AddAdGroupCriterionsRequest
     * @used-by DeleteAdGroupCriterionsRequest
     * @used-by GetAdGroupCriterionsByIdsRequest
     * @used-by UpdateAdGroupCriterionsRequest
     */
    final class CriterionType
    {
        /** Represents a Bing Shopping campaign's ad group product partition criterion. */
        const ProductPartition = 'ProductPartition';

        /** Represents a Dynamic Search Ads campaign's ad group webpage criterion. */
        const Webpage = 'Webpage';
    }

}
