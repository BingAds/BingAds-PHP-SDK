<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a collection of ad extensions that failed editorial review.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adextensioneditorialreasoncollection?view=bingads-11 AdExtensionEditorialReasonCollection Data Object
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
