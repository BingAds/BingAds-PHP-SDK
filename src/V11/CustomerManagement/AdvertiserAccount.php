<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines an advertiser account.
     * @link http://msdn.microsoft.com/en-us/library/ee704163(v=msads.110).aspx AdvertiserAccount Data Object
     * 
     * @uses CustomerInfo
     * @uses KeyValuePairOfstringstring
     * @uses Address
     */
    final class AdvertiserAccount extends Account
    {
        /**
         * The list of agencies linked to this account.
         * @var CustomerInfo[]
         */
        public $LinkedAgencies;

        /**
         * The identifier of the third party that is responsible for a sales lead.
         * @var integer
         */
        public $SalesHouseCustomerId;

        /**
         * For a list of valid key and value strings for this element, see AdvertiserAccount TaxInformation in the section below.
         * @var KeyValuePairOfstringstring[]
         */
        public $TaxInformation;

        /**
         * The identifier of a backup payment instrument to use to settle the account.
         * @var integer
         */
        public $BackUpPaymentInstrumentId;

        /**
         * A customer specified amount for settling against the selected payment instrument.
         * @var float
         */
        public $BillingThresholdAmount;

        /**
         * The location where your business is legally registered.
         * @var Address
         */
        public $BusinessAddress;
    }

}
