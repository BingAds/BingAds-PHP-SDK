<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that determines the intent option for all location and radius criterions of the campaign or ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/locationintentcriterion?view=bingads-13 LocationIntentCriterion Data Object
     * 
     * @uses IntentOption
     */
    final class LocationIntentCriterion extends Criterion
    {
        /**
         * Determines whether a person must be physically located in the targeted location in order for the ad to display.
         * @var IntentOption
         */
        public $IntentOption;
    }

}
