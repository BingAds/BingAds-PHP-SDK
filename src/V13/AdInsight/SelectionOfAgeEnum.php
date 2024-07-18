<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a data object for the selection of age targeting.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/selectionofageenum?view=bingads-13 SelectionOfAgeEnum Data Object
     * 
     * @uses AgeEnum
     * @used-by GetAudienceFullEstimationRequest
     */
    final class SelectionOfAgeEnum
    {
        /**
         * The traffic matching any value of Includes array is included as an estimation.
         * @var AgeEnum[]
         */
        public $Includes;

        /**
         * The traffic matching any value of Excludes array is excluded as an estimation.
         * @var AgeEnum[]
         */
        public $Excludes;
    }

}
