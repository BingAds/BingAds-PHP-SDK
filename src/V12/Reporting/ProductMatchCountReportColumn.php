<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ProductMatchCountReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/productmatchcountreportcolumn?view=bingads-12 ProductMatchCountReportColumn Value Set
     * 
     * @used-by ProductMatchCountReportRequest
     */
    final class ProductMatchCountReportColumn
    {
        /** The Bing Ads assigned identifier of a customer. */
        const CustomerId = 'CustomerId';

        /** The customer name. */
        const CustomerName = 'CustomerName';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The forward slash ('/') delimited list of product conditions, reported as Operand = Attribute. */
        const ProductGroup = 'ProductGroup';

        /** The product partition type. */
        const PartitionType = 'PartitionType';

        /** The Bing Ads assigned identifier of an ad group criterion. */
        const AdGroupCriterionId = 'AdGroupCriterionId';

        /** The number of products per campaign that matched your product group targets. */
        const MatchedProductsAtCampaign = 'MatchedProductsAtCampaign';

        /** The number of products per ad group that matched your product group targets. */
        const MatchedProductsAtAdGroup = 'MatchedProductsAtAdGroup';

        /** The number of products per product group that matched your product group targets. */
        const MatchedProductsAtProductGroup = 'MatchedProductsAtProductGroup';
    }

}
