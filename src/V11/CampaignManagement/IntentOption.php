<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible intent options for location criterion, for example to target people in, searching for, or viewing pages about your targeted location.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/intentoption?version=11 IntentOption Value Set
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
