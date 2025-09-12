<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a data object for the selection of gender targeting.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/selectionofgenderenum?view=bingads-13 SelectionOfGenderEnum Data Object
     * 
     * @uses GenderEnum
     * @used-by GetAudienceBreakdownRequest
     * @used-by GetAudienceFullEstimationRequest
     */
    final class SelectionOfGenderEnum
    {
        /**
         * The traffic matching any value of Includes array is included as an estimation.
         * @var GenderEnum[]
         */
        public $Includes;

        /**
         * The traffic matching any value of Excludes array is excluded as an estimation.
         * @var GenderEnum[]
         */
        public $Excludes;
    }

}
