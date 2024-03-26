<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of ad group criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adgroupcriteriontype?view=bingads-13 AdGroupCriterionType Value Set
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

        /** Represents one or more AgeCriterion, DayTimeCriterion, DeviceCriterion, GenderCriterion, LocationCriterion, LocationIntentCriterion, ProfileCriterion, and RadiusCriterion objects that can be managed together to show ads based on your target criteria. */
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

        /** The ad group criterion is a company name profile criterion. */
        const CompanyName = 'CompanyName';

        /** The ad group criterion is a job function profile criterion. */
        const JobFunction = 'JobFunction';

        /** The ad group criterion is an industry profile criterion. */
        const Industry = 'Industry';

        /** The ad group criterion is product audience association. */
        const ProductAudience = 'ProductAudience';

        /** The ad group criterion is a similar remarketing list association. */
        const SimilarRemarketingList = 'SimilarRemarketingList';

        /** The ad group criterion is a combined list association. */
        const CombinedList = 'CombinedList';

        /** The criterion type for lodging campaigns. */
        const HotelGroup = 'HotelGroup';

        /** The ad group criterion is a hotel advance booking window criterion. */
        const HotelAdvanceBookingWindow = 'HotelAdvanceBookingWindow';

        /** The ad group criterion is a hotel check in day criterion. */
        const HotelCheckInDay = 'HotelCheckInDay';

        /** The ad group criterion is a hotel length of stay criterion. */
        const HotelLengthOfStay = 'HotelLengthOfStay';

        /** The ad group criterion is a hotel date selection type criterion. */
        const HotelDateSelectionType = 'HotelDateSelectionType';

        /** The ad group criterion is a hotel check in date criterion. */
        const HotelCheckInDate = 'HotelCheckInDate';

        /** The ad group criterion is a genre criterion. */
        const Genre = 'Genre';

        /** For internal use only. */
        const CustomerList = 'CustomerList';
    }

}
