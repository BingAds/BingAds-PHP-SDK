<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the possible status values of a ClientLink.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/clientlinkstatus?view=bingads-13 ClientLinkStatus Value Set
     * 
     * @used-by ClientLink
     */
    final class ClientLinkStatus
    {
        /** The ClientLink has been added via the AddClientLinks operation. */
        const LinkPending = 'LinkPending';

        /** The link request has been canceled by the agency. */
        const LinkCanceled = 'LinkCanceled';

        /** The link is inactive due to expiry. */
        const LinkExpired = 'LinkExpired';

        /** The invited client should use this value to accept the link invitation. */
        const LinkAccepted = 'LinkAccepted';

        /** The link request has been declined by the invited client. */
        const LinkDeclined = 'LinkDeclined';

        /** The link process is in progress and either waiting for the billing transition to complete or the specified client link start date has not yet arrived. */
        const LinkInProgress = 'LinkInProgress';

        /** The link is established and the managing customer can access the client account. */
        const Active = 'Active';

        /** The link process failed to complete successfully. */
        const LinkFailed = 'LinkFailed';

        /** The agency should use this value to request an unlink. */
        const UnlinkRequested = 'UnlinkRequested';

        /** A request to terminate the link has been sent. */
        const UnlinkPending = 'UnlinkPending';

        /** Reserved for future use. */
        const UnlinkCanceled = 'UnlinkCanceled';

        /** The unlink process is in progress and waiting for the billing transition to complete. */
        const UnlinkInProgress = 'UnlinkInProgress';

        /** The unlink process has completed and the managing customer can no longer access the client account. */
        const Inactive = 'Inactive';

        /** The unlink process failed to complete successfully, for example because the billing transition could not be completed. */
        const UnlinkFailed = 'UnlinkFailed';
    }

}
