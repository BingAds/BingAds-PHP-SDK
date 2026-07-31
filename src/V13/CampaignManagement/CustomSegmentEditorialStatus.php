<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible custom segment editorial status values.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customsegmenteditorialstatus?view=bingads-13 CustomSegmentEditorialStatus Value Set
     * 
     * @used-by CustomSegment
     */
    final class CustomSegmentEditorialStatus
    {
        /** The status is Unknown. */
        const Unknown = 'Unknown';

        /** The status is Rejected. */
        const Rejected = 'Rejected';

        /** The status is Pending. */
        const Pending = 'Pending';

        /** The status is PartialApproved. */
        const PartialApproved = 'PartialApproved';

        /** The status is Approved. */
        const Approved = 'Approved';
    }

}
