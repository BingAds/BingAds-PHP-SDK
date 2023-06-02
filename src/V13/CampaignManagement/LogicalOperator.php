<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the supported set of logical operators for combined list audiences.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/logicaloperator?view=bingads-13 LogicalOperator Value Set
     * 
     * @used-by CombinationRule
     */
    final class LogicalOperator
    {
        /** Include only customers who are in every single one of these audience lists. */
        const And = 'And';

        /** Include customers who are in any of these audience lists. */
        const Or = 'Or';

        /** Exclude customers who are in any of these audience lists. */
        const Not = 'Not';
    }

}
