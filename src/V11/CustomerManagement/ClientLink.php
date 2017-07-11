<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a client link object.
     * @link http://msdn.microsoft.com/en-us/library/dn632189(v=msads.110).aspx ClientLink Data Object
     * 
     * @uses ClientLinkStatus
     * @uses KeyValuePairOfstringstring
     * @used-by AddClientLinksRequest
     * @used-by SearchClientLinksResponse
     * @used-by UpdateClientLinksRequest
     */
    final class ClientLink
    {
        public $ClientAccountId;
        public $ClientAccountNumber;
        public $ManagingCustomerId;
        public $ManagingCustomerNumber;
        public $Note;
        public $Name;
        public $InviterEmail;
        public $InviterName;
        public $InviterPhone;
        public $IsBillToClient;
        public $StartDate;
        public $Status;
        public $SuppressNotification;
        public $LastModifiedDateTime;
        public $LastModifiedByUserId;
        public $Timestamp;
        public $ForwardCompatibilityMap;
    }

}
