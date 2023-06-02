<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a label object to organize campaigns, ad groups, ads, and keywords into groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/label?view=bingads-13 Label Data Object
     * 
     * @used-by AddLabelsRequest
     * @used-by GetLabelsByIdsResponse
     * @used-by UpdateLabelsRequest
     */
    final class Label
    {
        /**
         * The label color as a hexadecimal code.
         * @var string
         */
        public $ColorCode;

        /**
         * The label description.
         * @var string
         */
        public $Description;

        /**
         * The system-generated identifier of the label.
         * @var integer
         */
        public $Id;

        /**
         * The label name.
         * @var string
         */
        public $Name;
    }

}
