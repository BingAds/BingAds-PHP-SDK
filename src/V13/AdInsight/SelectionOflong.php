<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a data object for the selection segment IDs.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/selectionoflong?view=bingads-13 SelectionOflong Data Object
     * 
     * @used-by GetAudienceFullEstimationRequest
     */
    final class SelectionOflong
    {
        /**
         * The traffic matching any value of Includes array is included as an estimation.
         * @var integer[]
         */
        public $Includes;

        /**
         * The traffic matching any value of Excludes array is excluded as an estimation.
         * @var integer[]
         */
        public $Excludes;
    }

}
