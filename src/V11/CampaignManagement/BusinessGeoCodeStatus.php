<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible status values that indicate the progress of determining the latitude and longitude values of a business.
     * @link http://msdn.microsoft.com/en-us/library/dd796820(v=msads.110).aspx BusinessGeoCodeStatus Value Set
     * 
     * @used-by LocationAdExtension
     */
    final class BusinessGeoCodeStatus
    {
        /** In the process of determining the latitude and longitude of the business. */
        const Pending = 'Pending';

        /** Successfully determined the latitude and longitude of the business. */
        const Complete = 'Complete';

        /** Unable to determine the latitude and longitude of the business, possibly because the address did not resolve. */
        const Invalid = 'Invalid';

        /** Unable to determine the latitude and longitude of the business. */
        const Failed = 'Failed';
    }

}
