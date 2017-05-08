<?php
// Generated on 5/7/2017 5:45:54 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attribute columns that you can include in the SearchCampaignChangeHistoryReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/hh912353(v=msads.90).aspx SearchCampaignChangeHistoryReportColumn Value Set
     * 
     * @used-by SearchCampaignChangeHistoryReportRequest
     */
    final class SearchCampaignChangeHistoryReportColumn
    {
        /** The date and time of the change. */
        const DateTime = 'DateTime';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The username of the user that made the change to settings within the account. */
        const ChangedBy = 'ChangedBy';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad title. */
        const AdTitle = 'AdTitle';

        /** The text attribute of an ad. */
        const AdDescription = 'AdDescription';

        /** The ad display URL. */
        const DisplayUrl = 'DisplayUrl';

        /** The keyword text. */
        const Keyword = 'Keyword';

        /** The value that identifies the entity that changed. */
        const ItemChanged = 'ItemChanged';

        /** Identifies the attribute or property of the entity from the ItemChanged column that changed. */
        const AttributeChanged = 'AttributeChanged';

        /** The value that indicates whether the element was added, updated, or deleted. */
        const HowChanged = 'HowChanged';

        /** The value before the change. */
        const OldValue = 'OldValue';

        /** The value after the change. */
        const NewValue = 'NewValue';
    }

}
