<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/entityresult?view=bingads-13 EntityResult Data Object
     * 
     * @uses CategoryResult
     * @used-by GetDiagnosticsResponse
     */
    final class EntityResult
    {
        /**
         * Reserved.
         * @var CategoryResult[]
         */
        public $Categories;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var string
         */
        public $SubType;

        /**
         * Reserved.
         * @var string
         */
        public $Type;
    }

}
