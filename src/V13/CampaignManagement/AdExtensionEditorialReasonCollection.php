<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a collection of ad extensions that failed editorial review.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adextensioneditorialreasoncollection?view=bingads-13 AdExtensionEditorialReasonCollection Data Object
     * 
     * @uses AdExtensionEditorialReason
     * @used-by GetAdExtensionsEditorialReasonsResponse
     */
    final class AdExtensionEditorialReasonCollection
    {
        /**
         * The identifier of the ad extension that failed editorial review.
         * @var integer
         */
        public $AdExtensionId;

        /**
         * A list of AdExtensionEditorialReason objects that identify the component of an ad extension that failed editorial review, and the reason for the failure.
         * @var AdExtensionEditorialReason[]
         */
        public $Reasons;
    }

}
