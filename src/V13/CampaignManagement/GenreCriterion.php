<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads from a specific genre.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/genrecriterion?view=bingads-13 GenreCriterion Data Object
     */
    final class GenreCriterion extends Criterion
    {
        /**
         * The Microsoft Advertising identifier of the Genre.
         * @var integer
         */
        public $GenreId;
    }

}
