<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/selectionofgenderenum?view=bingads-13 SelectionOfGenderEnum Data Object
     * 
     * @uses GenderEnum
     * @used-by GetAudienceFullEstimationRequest
     */
    final class SelectionOfGenderEnum
    {
        /**
         * Reserved.
         * @var GenderEnum[]
         */
        public $Includes;

        /**
         * Reserved.
         * @var GenderEnum[]
         */
        public $Excludes;
    }

}
