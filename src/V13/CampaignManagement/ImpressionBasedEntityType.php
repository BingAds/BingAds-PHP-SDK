<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a value set for ImpressionBasedEntityType.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/impressionbasedentitytype?view=bingads-13 ImpressionBasedEntityType Value Set
     * 
     * @used-by ImpressionBasedRemarketingList
     */
    final class ImpressionBasedEntityType
    {
        /** The impression-based remarketing list type is none. */
        const None = 'None';

        /** The impression-based remarketing list type is Campaign. */
        const Campaign = 'Campaign';

        /** The impression-based remarketing list type is AdGroup. */
        const AdGroup = 'AdGroup';
    }

}
