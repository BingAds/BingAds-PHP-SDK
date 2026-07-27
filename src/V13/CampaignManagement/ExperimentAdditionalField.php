<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional properties that you can request when using the Experiment object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/experimentadditionalfield?view=bingads-13 ExperimentAdditionalField Value Set
     * 
     * @used-by GetExperimentsByIdsRequest
     */
    final class ExperimentAdditionalField
    {
        /** Request that the experiment sub type field is used when requesting the Experiment object. */
        const ExperimentSubType = 'ExperimentSubType';

        /** Request that the experiment arms field is used when requesting an Experiment object. */
        const ExperimentArms = 'ExperimentArms';

        /** Reserved. */
        const ExperimentCampaignType = 'ExperimentCampaignType';

        /** Reserved. */
        const MarketingObjective = 'MarketingObjective';
    }

}
