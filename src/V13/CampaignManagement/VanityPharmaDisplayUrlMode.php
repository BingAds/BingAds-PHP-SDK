<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a value set for VanityPharmaDisplayUrlMode.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/vanitypharmadisplayurlmode?view=bingads-13 VanityPharmaDisplayUrlMode Value Set
     * 
     * @used-by VanityPharmaSetting
     */
    final class VanityPharmaDisplayUrlMode
    {
        /** Replace the vanity pharma URL with the manufacturer website URL. */
        const ManufacturerWebsiteUrl = 'ManufacturerWebsiteUrl';

        /** Replace the vanity pharma URL with a description of the website. */
        const WebsiteDescription = 'WebsiteDescription';
    }

}
