<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link http://msdn.microsoft.com/en-us/library/dn169117(v=msads.90).aspx ApiFault Data Object
     * 
     * @uses OperationError
     */
    final class ApiFault extends ApplicationFault
    {
        public $OperationErrors;
    }

}
