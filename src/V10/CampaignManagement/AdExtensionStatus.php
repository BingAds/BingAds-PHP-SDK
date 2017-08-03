<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible status values of an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/jj134386(v=msads.100).aspx AdExtensionStatus Value Set
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
