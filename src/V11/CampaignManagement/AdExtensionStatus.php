<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible status values of an ad extension.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adextensionstatus?view=bingads-11 AdExtensionStatus Value Set
     * 
     * @used-by AdExtension
     */
    final class AdExtensionStatus
    {
        /** The ad extension is active. */
        const Active = 'Active';

        /** The ad extension is deleted. */
        const Deleted = 'Deleted';
    }

}
