<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the status values of an ad group remarketing list association.
     * @link http://msdn.microsoft.com/en-us/library/mt735043(v=msads.100).aspx AdGroupRemarketingListAssociationStatus Value Set
     * 
     * @used-by AdGroupRemarketingListAssociation
     */
    final class AdGroupRemarketingListAssociationStatus
    {
        /** The ad group remarketing list association is active. */
        const Active = 'Active';

        /** The ad group remarketing list association is paused. */
        const Paused = 'Paused';

        /** Reserved for internal use. */
        const Deleted = 'Deleted';
    }

}
