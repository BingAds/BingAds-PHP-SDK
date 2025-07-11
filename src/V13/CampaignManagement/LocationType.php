<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the location type value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/locationtype?view=bingads-13 LocationType Value Set
     * 
     * @used-by LocationConditionItem
     */
    final class LocationType
    {
        /** The location condition item type is Country. */
        const Country = 'Country';

        /** The location condition item type is SubGeography. */
        const SubGeography = 'SubGeography';

        /** The location condition item type is MetroArea. */
        const MetroArea = 'MetroArea';

        /** The location condition item type is City. */
        const City = 'City';

        /** The location condition item type is PostalCode. */
        const PostalCode = 'PostalCode';

        /** The location condition item type is County. */
        const County = 'County';

        /** The location condition item type is Neighborhood. */
        const Neighborhood = 'Neighborhood';
    }

}
