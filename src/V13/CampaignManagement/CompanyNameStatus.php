<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible company name status values.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/companynamestatus?view=bingads-13 CompanyNameStatus Value Set
     * 
     * @used-by CompanyName
     */
    final class CompanyNameStatus
    {
        /** The company name match isn't processed. */
        const NotProcessed = 'NotProcessed';

        /** There is a company name match. */
        const Matched = 'Matched';

        /** There is no company name match. */
        const NoMatch = 'NoMatch';
    }

}
