<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible types of ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/jj689543(v=msads.110).aspx AdGroupCriterionType Value Set
     * 
     * @used-by AddAdGroupCriterionsRequest
     * @used-by DeleteAdGroupCriterionsRequest
     * @used-by GetAdGroupCriterionsByIdsRequest
     * @used-by UpdateAdGroupCriterionsRequest
     */
    final class AdGroupCriterionType
    {
        /** The ad group criterion is a product partition criterion. */
        const ProductPartition = 'ProductPartition';

        /** The ad group criterion is a webpage criterion. */
        const Webpage = 'Webpage';

        /** Represents one or more AgeCriterion, DayTimeCriterion, DeviceCriterion, GenderCriterion, LocationCriterion, LocationIntentCriterion, and RadiusCriterion objects that can be managed together to show ads based on your target criteria. */
        const Targets = 'Targets';

        /** The ad group criterion is an age criterion. */
        const Age = 'Age';

        /** The ad group criterion is a gender criterion. */
        const Gender = 'Gender';

        /** The ad group criterion is a day and time criterion. */
        const DayTime = 'DayTime';

        /** The ad group criterion is a device criterion. */
        const Device = 'Device';

        /** The ad group criterion is a location criterion. */
        const Location = 'Location';

        /** The ad group criterion is a location intent criterion. */
        const LocationIntent = 'LocationIntent';

        /** The ad group criterion is a radius criterion. */
        const Radius = 'Radius';

        /** The ad group criterion is an audience criterion. */
        const Audience = 'Audience';

        /** The ad group criterion is a custom audience association. */
        const CustomAudience = 'CustomAudience';

        /** The ad group criterion is an in-market audience association. */
        const InMarketAudience = 'InMarketAudience';

        /** The ad group criterion is a remarketing list association. */
        const RemarketingList = 'RemarketingList';
    }

}
