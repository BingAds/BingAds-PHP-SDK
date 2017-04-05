<?php
// Generated on 4/4/2017 5:50:24 AM

namespace Microsoft\BingAds\V10\Bulk;

{
    /**
     * Defines an error object that identifies the entity with the batch of entities that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/dn249981(v=msads.100).aspx EditorialError Data Object
     */
    final class EditorialError extends BatchError
    {
        /**
         * Reserved for future use.
         * @var boolean
         */
        public $Appealable;

        /**
         * The text that caused the entity to be disapproved.
         * @var string
         */
        public $DisapprovedText;

        /**
         * The element or property of the entity that caused the entity to be disapproved.
         * @var string
         */
        public $Location;

        /**
         * The corresponding country or region for the flagged editorial issue.
         * @var string
         */
        public $PublisherCountry;

        /**
         * A numeric code that identifies the error.
         * @var integer
         */
        public $ReasonCode;
    }

}
