<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";


use SoapVar;
use SoapFault;
use Exception;



// Outputs the list of ids.

function OutputIds($ids)
{
    if(count((array)$ids) == 0)
    {
        return;
    }

    foreach ($ids as $id)
    {
        if(!is_null($id)){
            printf("Id: %s\n", $id);
        }
        else{
            printf("Nil Id\n");
        }
        
    }
}

// Outputs a list of BatchError objects that represent partial errors while managing negative keywords.

function OutputPartialErrors($partialErrors)
{
    if(count((array)$partialErrors) == 0)
    {
        return;
    }

    print "BatchError (PartialErrors) items:\n\n";
    foreach ($partialErrors->BatchError as $error)
    {
        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n\n", $error->Message);

        // In the case of an EditorialError, more details are available
        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n\n", $error->ReasonCode);
        }
    }
}



?>