<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible intent options for location criterion, for example to target people in, searching for, or viewing pages about your targeted location.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/intentoption?view=bingads-13 IntentOption Value Set
     * 
     * @used-by LocationIntentCriterion
     */
    final class IntentOption
    {
        /** Show ads to people in, searching for, or viewing pages about your targeted location. */
        const PeopleInOrSearchingForOrViewingPages = 'PeopleInOrSearchingForOrViewingPages';

        /** Show ads to people in your targeted location. */
        const PeopleIn = 'PeopleIn';

        /** Show ads to people searching for or viewing pages about your targeted location. */
        const PeopleSearchingForOrViewingPages = 'PeopleSearchingForOrViewingPages';
    }

}
