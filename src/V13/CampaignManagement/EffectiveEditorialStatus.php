<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible effective editorial status values.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/effectiveeditorialstatus?view=bingads-13 EffectiveEditorialStatus Value Set
     * 
     * @used-by CustomSegmentCatalog
     */
    final class EffectiveEditorialStatus
    {
        /** The status is Unknown. */
        const Unknown = 'Unknown';

        /** The status is Approved. */
        const Approved = 'Approved';

        /** The status is Rejected. */
        const Rejected = 'Rejected';

        /** The status is Pending. */
        const Pending = 'Pending';
    }

}
