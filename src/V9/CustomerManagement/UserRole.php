<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines the possible roles of a user.
     * @link http://msdn.microsoft.com/en-us/library/ee704157(v=msads.90).aspx UserRole Value Set
     * 
     * @used-by UserInvitation
     */
    final class UserRole
    {
        const AdvertiserCampaignManager = 'AdvertiserCampaignManager';
        const SuperAdmin = 'SuperAdmin';
        const ClientViewer = 'ClientViewer';
        const ClientManager = 'ClientManager';
        const PublisherAdmin = 'PublisherAdmin';
        const PublisherAccountManager = 'PublisherAccountManager';
        const PublisherReportUser = 'PublisherReportUser';
        const PublisherListManager = 'PublisherListManager';
        const PublisherAdViewer = 'PublisherAdViewer';
        const ClientAdmin = 'ClientAdmin';
    }

}
