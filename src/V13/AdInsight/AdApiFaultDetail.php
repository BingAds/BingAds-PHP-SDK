<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an Ad Insight Ad API fault detail object that operations return when generic errors occur, such as an authentication error.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/adapifaultdetail?view=bingads-13 AdApiFaultDetail Data Object
     * 
     * @uses AdApiError
     */
    final class AdApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of AdApiError objects that contains the details that explain why the service operation failed.
         * @var AdApiError[]
         */
        public $Errors;
    }

}
