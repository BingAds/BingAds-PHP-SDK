<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of campaign criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaigncriteriontype?view=bingads-13 CampaignCriterionType Value Set
     * 
     * @used-by AddCampaignCriterionsRequest
     * @used-by DeleteCampaignCriterionsRequest
     * @used-by GetCampaignCriterionsByIdsRequest
     * @used-by UpdateCampaignCriterionsRequest
     */
    final class CampaignCriterionType
    {
        /** The campaign criterion is a product scope criterion. */
        const ProductScope = 'ProductScope';

        /** The campaign criterion is a webpage criterion. */
        const Webpage = 'Webpage';

        /** Represents one or more AgeCriterion, DayTimeCriterion, DeviceCriterion, GenderCriterion, LocationCriterion, LocationIntentCriterion, and RadiusCriterion objects that can be managed together to show ads based on your target criteria. */
        const Targets = 'Targets';

        /** The campaign criterion is an age criterion. */
        const Age = 'Age';

        /** The campaign criterion is a day and time criterion. */
        const DayTime = 'DayTime';

        /** The campaign criterion is a gender criterion. */
        const Gender = 'Gender';

        /** The campaign criterion is a location criterion. */
        const Location = 'Location';

        /** The campaign criterion is a radius criterion. */
        const Radius = 'Radius';

        /** The campaign criterion is a device criterion. */
        const Device = 'Device';

        /** The campaign criterion is a location intent criterion. */
        const LocationIntent = 'LocationIntent';

        /** The campaign criterion is an audience criterion. */
        const Audience = 'Audience';

        /** The campaign criterion is a custom audience association. */
        const CustomAudience = 'CustomAudience';

        /** The campaign criterion is an in-market audience association. */
        const InMarketAudience = 'InMarketAudience';

        /** The campaign criterion is a remarketing list association. */
        const RemarketingList = 'RemarketingList';

        /** The campaign criterion is a company name profile criterion. */
        const CompanyName = 'CompanyName';

        /** The campaign criterion is a job function profile criterion. */
        const JobFunction = 'JobFunction';

        /** The campaign criterion is an industry profile criterion. */
        const Industry = 'Industry';

        /** The campaign criterion is product audience association. */
        const ProductAudience = 'ProductAudience';

        /** The campaign criterion is a similar remarketing list association. */
        const SimilarRemarketingList = 'SimilarRemarketingList';

        /** The campaign criterion is a store criterion. */
        const Store = 'Store';

        /** The campaign criterion is a combined list association. */
        const CombinedList = 'CombinedList';

        /** For internal use only. */
        const CustomerList = 'CustomerList';
    }

}
