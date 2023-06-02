<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of promotion occasions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/promotionoccasion?view=bingads-13 PromotionOccasion Value Set
     * 
     * @used-by PromotionAdExtension
     */
    final class PromotionOccasion
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** The "New Year's" promotion can run from December 1 through February 28. */
        const NewYears = 'NewYears';

        /** The "Valentine's Day" promotion can run from January 15 through February 28. */
        const ValentinesDay = 'ValentinesDay';

        /** The "Easter" promotion can run from March 1 through April 30. */
        const Easter = 'Easter';

        /** The "Mother's Day" promotion can run anytime according to your ad extension scheduling. */
        const MothersDay = 'MothersDay';

        /** The "Father's Day" promotion can run anytime according to your ad extension scheduling. */
        const FathersDay = 'FathersDay';

        /** The "Labor Day" promotion can run from April 15 through September 15. */
        const LaborDay = 'LaborDay';

        /** The "Back to School" promotion can run anytime according to your ad extension scheduling. */
        const BackToSchool = 'BackToSchool';

        /** The "Halloween" promotion can run from October 1 through November 15. */
        const Halloween = 'Halloween';

        /** The "Black Friday" promotion can run from October 15 through December 15. */
        const BlackFriday = 'BlackFriday';

        /** The "Cyber Monday" promotion can run from October 15 through December 15. */
        const CyberMonday = 'CyberMonday';

        /** The "Christmas" promotion can run from November 1 through January 15. */
        const Christmas = 'Christmas';

        /** The "Boxing Day" promotion can run from December 15 through January 15. */
        const BoxingDay = 'BoxingDay';

        /** The promotion can run anytime according to your ad extension scheduling. */
        const None = 'None';

        /** The "Independence Day" promotion can run anytime according to your ad extension scheduling. */
        const IndependenceDay = 'IndependenceDay';

        /** The "National Day" promotion can run anytime according to your ad extension scheduling. */
        const NationalDay = 'NationalDay';

        /** The "End of Season" promotion can run anytime according to your ad extension scheduling. */
        const EndOfSeason = 'EndOfSeason';

        /** The "Winter Sale" promotion can run anytime according to your ad extension scheduling. */
        const WinterSale = 'WinterSale';

        /** The "Summer Sale" promotion can run anytime according to your ad extension scheduling. */
        const SummerSale = 'SummerSale';

        /** The "Fall Sale" promotion can run anytime according to your ad extension scheduling. */
        const FallSale = 'FallSale';

        /** The "Spring Sale" promotion can run anytime according to your ad extension scheduling. */
        const SpringSale = 'SpringSale';

        /** The "Ramadan" promotion can run anytime according to your ad extension scheduling. */
        const Ramadan = 'Ramadan';

        /** The "Eid al-Fitr" promotion can run anytime according to your ad extension scheduling. */
        const EidAlFitr = 'EidAlFitr';

        /** The "Eid al-Adha" promotion can run anytime according to your ad extension scheduling. */
        const EidAlAdha = 'EidAlAdha';

        /** The "Single's Day" promotion can run from October 15 through November 30. */
        const SinglesDay = 'SinglesDay';

        /** The "Women's Day" promotion can run from February 15 through March 31. */
        const WomensDay = 'WomensDay';

        /** The "Holi" promotion can run from February 1 through March 31. */
        const Holi = 'Holi';

        /** The "Parent's Day" promotion can run from April 15 through August 1. */
        const ParentsDay = 'ParentsDay';

        /** The "St. */
        const StNicholasDay = 'StNicholasDay';

        /** The "Chinese New Year" promotion can run from January 15 through March 1. */
        const ChineseNewYear = 'ChineseNewYear';

        /** The "Carnival" promotion can run from February 1 through March 31. */
        const Carnival = 'Carnival';

        /** The "Epiphany" promotion can run from December 15 through January 31. */
        const Epiphany = 'Epiphany';

        /** The "Rosh Hashanah" promotion can run from August 15 through November 1. */
        const RoshHashanah = 'RoshHashanah';

        /** The "Passover" promotion can run from February 15 through May 1. */
        const Passover = 'Passover';

        /** The "Hanukkah" promotion can run from November 15 through January 31. */
        const Hanukkah = 'Hanukkah';

        /** The "Diwali" promotion can run from September 1 through December 1. */
        const Diwali = 'Diwali';

        /** The "Navratri" promotion can run from September 15 through October 31. */
        const Navratri = 'Navratri';

        /** The "Songkran" promotion can run anytime according to your ad extension scheduling. */
        const Songkran = 'Songkran';

        /** The "Year-End Gift" promotion can run anytime according to your ad extension scheduling. */
        const YearEndGift = 'YearEndGift';
    }

}
