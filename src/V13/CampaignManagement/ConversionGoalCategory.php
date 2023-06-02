<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines categories used to segment conversion goals.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversiongoalcategory?view=bingads-13 ConversionGoalCategory Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalCategory
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** The category has not yet been set. */
        const None = 'None';

        /** Segment by the "Purchase" sales category. */
        const Purchase = 'Purchase';

        /** Segment by the "Add to cart" sales category. */
        const AddToCart = 'AddToCart';

        /** Segment by the "Begin checkout" sales category. */
        const BeginCheckout = 'BeginCheckout';

        /** Segment by the "Subscribe" sales category. */
        const Subscribe = 'Subscribe';

        /** Segment by the "Submit lead form" leads category. */
        const SubmitLeadForm = 'SubmitLeadForm';

        /** Segment by the "Book appointment" leads category. */
        const BookAppointment = 'BookAppointment';

        /** Segment by the "Sign-up" leads category. */
        const Signup = 'Signup';

        /** Segment by the "Request quote" leads category. */
        const RequestQuote = 'RequestQuote';

        /** Segment by the "Get directions" leads category. */
        const GetDirections = 'GetDirections';

        /** Segment by the "Outbound click" leads category. */
        const OutboundClick = 'OutboundClick';

        /** Segment by the "Contact" category. */
        const Contact = 'Contact';

        /** Segment by the "Page view" category. */
        const PageView = 'PageView';

        /** Segment by the "Download" sales category. */
        const Download = 'Download';

        /** Segment by the "Other" category. */
        const Other = 'Other';
    }

}
