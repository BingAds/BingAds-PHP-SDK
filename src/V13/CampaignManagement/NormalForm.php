<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible normal form types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/normalform?view=bingads-13 NormalForm Value Set
     * 
     * @used-by PageVisitorsRule
     */
    final class NormalForm
    {
        /** Refers to conjunctive normal form (CNF) that can be described as an AND of ORs or a product of sums. */
        const Conjunctive = 'Conjunctive';

        /** Refers to disjunctive normal form (DNF) that can be described as an OR of ANDs or a sum of products. */
        const Disjunctive = 'Disjunctive';
    }

}
