<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Labels let you organize campaigns, ad groups, ads, and keywords into groups based on whatever is important to you.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/label?view=bingads-12 Label Data Object
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
