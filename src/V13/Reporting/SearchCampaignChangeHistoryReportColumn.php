<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attribute columns that you can include in the SearchCampaignChangeHistoryReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/searchcampaignchangehistoryreportcolumn?view=bingads-13 SearchCampaignChangeHistoryReportColumn Value Set
     * 
     * @used-by SearchCampaignChangeHistoryReportRequest
     */
    final class SearchCampaignChangeHistoryReportColumn
    {
        /** The date and time of the change. */
        const DateTime = 'DateTime';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The username of the user that made the change to settings within the account. */
        const ChangedBy = 'ChangedBy';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad title parts. */
        const AdTitle = 'AdTitle';

        /** The first ad description that appears below the path in your ad. */
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

        /** The name of the entity that was updated. */
        const EntityName = 'EntityName';

        /** The Microsoft Advertising system identifier of the entity that was updated. */
        const EntityId = 'EntityId';

        /** The Microsoft Advertising tool used to make changes. */
        const Tool = 'Tool';
    }

}
