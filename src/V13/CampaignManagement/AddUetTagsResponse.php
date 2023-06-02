<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new Universal Event Tracking (UET) tags that you can add to your website to allow Microsoft Advertising to collect actions people take on your website.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adduettags?view=bingads-13 AddUetTags Response Object
     * 
     * @uses UetTag
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddUetTags
     */
    final class AddUetTagsResponse
    {
        /**
         * An array of UetTag objects to add to the customer's shared UET tag library.
         * @var UetTag[]
         */
        public $UetTags;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
