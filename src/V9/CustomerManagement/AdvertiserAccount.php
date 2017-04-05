<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines an advertiser account.
     * @link http://msdn.microsoft.com/en-us/library/ee704163(v=msads.90).aspx AdvertiserAccount Data Object
     * 
     * @uses TaxType
     * @uses TaxIdStatus
     * @uses Address
     */
    final class AdvertiserAccount extends Account
    {
        /**
         * The name of the person to contact regarding this account.
         * @var string
         */
        public $AgencyContactName;

        /**
         * The identifier of the agency that manages an account on behalf of the owner of that account.
         * @var integer
         */
        public $AgencyCustomerId;

        /**
         * The identifier of the third party that is responsible for a sales lead.
         * @var integer
         */
        public $SalesHouseCustomerId;

        /**
         * The account's Value Added Tax (VAT) registration number (also known as VAT identifier).
         * @var string
         */
        public $TaxId;

        /**
         * For internal use only.
         * @var TaxType
         */
        public $TaxType;

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
         * The status of the account's Value Added Tax (VAT) identifier.
         * @var TaxIdStatus
         */
        public $TaxIdStatus;

        /**
         * The location where your business is legally registered.
         * @var Address
         */
        public $BusinessAddress;
    }

}
