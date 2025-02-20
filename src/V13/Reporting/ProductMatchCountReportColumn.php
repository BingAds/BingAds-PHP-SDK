<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ProductMatchCountReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/productmatchcountreportcolumn?view=bingads-13 ProductMatchCountReportColumn Value Set
     * 
     * @used-by ProductMatchCountReportRequest
     */
    final class ProductMatchCountReportColumn
    {
        /** The Microsoft Advertising assigned identifier of a customer. */
        const CustomerId = 'CustomerId';

        /** The customer name. */
        const CustomerName = 'CustomerName';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The backward slash delimited list of product conditions, reported as Operand = Attribute. */
        const ProductGroup = 'ProductGroup';

        /** The product partition type. */
        const PartitionType = 'PartitionType';

        /** The Microsoft Advertising assigned identifier of an ad group criterion. */
        const AdGroupCriterionId = 'AdGroupCriterionId';

        /** The number of products per campaign that matched your product group targets. */
        const MatchedProductsAtCampaign = 'MatchedProductsAtCampaign';

        /** The number of products per ad group that matched your product group targets. */
        const MatchedProductsAtAdGroup = 'MatchedProductsAtAdGroup';

        /** The number of products per product group that matched your product group targets. */
        const MatchedProductsAtProductGroup = 'MatchedProductsAtProductGroup';

        /** The campaign type. */
        const CampaignType = 'CampaignType';

        /** The Microsoft Advertising assigned identifier of an asset group. */
        const AssetGroupId = 'AssetGroupId';

        /** The asset group name. */
        const AssetGroupName = 'AssetGroupName';
    }

}
