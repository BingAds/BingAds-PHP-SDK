<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the possible formats of the body of an email message.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/emailformat?view=bingads-13 EmailFormat Value Set
     * 
     * @used-by ContactInfo
     */
    final class EmailFormat
    {
        /** The format of the body of the email message is HTML. */
        const Html = 'Html';

        /** The format of the body of the email message is plain text. */
        const Text = 'Text';
    }

}
