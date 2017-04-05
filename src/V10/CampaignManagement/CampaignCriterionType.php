<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible types of campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913131(v=msads.100).aspx CampaignCriterionType Value Set
     * 
     * @used-by AddCampaignCriterionsRequest
     * @used-by DeleteCampaignCriterionsRequest
     * @used-by GetCampaignCriterionsByIdsRequest
     * @used-by UpdateCampaignCriterionsRequest
     */
    final class CampaignCriterionType
    {
        /** The criterion identifies a Bing Shopping campaign product scope criterion. */
        const ProductScope = 'ProductScope';

        /** The criterion identifies a Dynamic Search Ads campaign webpage criterion. */
        const Webpage = 'Webpage';
    }

}
