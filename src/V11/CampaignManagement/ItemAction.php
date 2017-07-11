<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible types of item actions, for example to add, delete, or update the product partition criterion.
     * @link http://msdn.microsoft.com/en-us/library/dn913119(v=msads.110).aspx ItemAction Value Set
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
