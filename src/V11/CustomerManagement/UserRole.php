<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible roles of a user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/userrole?view=bingads-11 UserRole Value Set
     * 
     * @used-by UserInvitation
     */
    final class UserRole
    {
        /** This role has permissions to view selected accounts and add, edit, or delete campaigns within the selected accounts. */
        const AdvertiserCampaignManager = 'AdvertiserCampaignManager';

        /** This role has full permissions for all accounts. */
        const SuperAdmin = 'SuperAdmin';

        /** Reserved for internal use. */
        const ClientViewer = 'ClientViewer';

        /** Reserved for internal use. */
        const ClientManager = 'ClientManager';

        /** Reserved for internal use. */
        const PublisherAdmin = 'PublisherAdmin';

        /** Reserved for internal use. */
        const PublisherAccountManager = 'PublisherAccountManager';

        /** Reserved for internal use. */
        const PublisherReportUser = 'PublisherReportUser';

        /** Reserved for internal use. */
        const PublisherListManager = 'PublisherListManager';

        /** Reserved for internal use. */
        const PublisherAdViewer = 'PublisherAdViewer';

        /** Reserved for internal use. */
        const ClientAdmin = 'ClientAdmin';

        /** This role has permissions to manage campaigns and perform some billing activities on selected accounts. */
        const StandardUser = 'StandardUser';
    }

}
