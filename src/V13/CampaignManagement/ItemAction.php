<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of item actions, for example to add, delete, or update the product partition criterion.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/itemaction?view=bingads-13 ItemAction Value Set
     * 
     * @used-by AdGroupCriterionAction
     */
    final class ItemAction
    {
        /** The requested action is to add the item, for example add the ProductPartition. */
        const Add = 'Add';

        /** The requested action is to delete the item, for example delete the ProductPartition. */
        const Delete = 'Delete';

        /** The requested action is to update the item, for example update the ProductPartition. */
        const Update = 'Update';
    }

}
