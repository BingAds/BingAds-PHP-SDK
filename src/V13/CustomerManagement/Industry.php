<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the possible industry segments in which a customer operates.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/industry?view=bingads-13 Industry Value Set
     * 
     * @used-by Customer
     */
    final class Industry
    {
        /** Not applicable. */
        const NA = 'NA';

        /** The advertising agency sales house industry. */
        const AgencySalesHouse = 'AgencySalesHouse';

        /** The automotive industry. */
        const Automotive = 'Automotive';

        /** The consumer packaged goods industry. */
        const ConsumerPackagedGoods = 'ConsumerPackagedGoods';

        /** The education industry. */
        const Education = 'Education';

        /** The entertainment industry. */
        const Entertainment = 'Entertainment';

        /** The financial services industry. */
        const FinancialServices = 'FinancialServices';

        /** The food services industry. */
        const FoodServices = 'FoodServices';

        /** The gaming industry. */
        const Gaming = 'Gaming';

        /** The government, non-profit, or political industry. */
        const GovernmentNonprofitPolitical = 'GovernmentNonprofitPolitical';

        /** The healthcare industry. */
        const Healthcare = 'Healthcare';

        /** This value is reserved for internal use. */
        const Internal = 'Internal';

        /** The publishing and web media industry. */
        const PublishingAndWebMedia = 'PublishingAndWebMedia';

        /** The real estate industry. */
        const RealEstate = 'RealEstate';

        /** The retail industry. */
        const Retail = 'Retail';

        /** The services industry. */
        const Services = 'Services';

        /** The technology industry. */
        const Technology = 'Technology';

        /** The telecommunications industry. */
        const Telecommunications = 'Telecommunications';

        /** The travel and hospitality industry. */
        const TravelHospitality = 'TravelHospitality';

        /** An industry that is not listed. */
        const Other = 'Other';

        /** The pharmaceuticals industry. */
        const Pharmaceuticals = 'Pharmaceuticals';
    }

}
