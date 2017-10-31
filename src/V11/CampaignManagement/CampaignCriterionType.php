<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible types of campaign criterions.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/campaigncriteriontype?view=bingads-11 CampaignCriterionType Value Set
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
    }

}
