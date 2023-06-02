<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of promotion discount modifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/promotiondiscountmodifier?view=bingads-13 PromotionDiscountModifier Value Set
     * 
     * @used-by PromotionAdExtension
     */
    final class PromotionDiscountModifier
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** The promotion discount is modified with the "Up to" string prefix. */
        const UpTo = 'UpTo';

        /** The promotion discount is not modified. */
        const None = 'None';
    }

}
