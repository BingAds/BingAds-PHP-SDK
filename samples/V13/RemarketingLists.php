<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\Campaign;
use Microsoft\BingAds\V13\CampaignManagement\AdGroup;
use Microsoft\BingAds\V13\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterionStatus;
use Microsoft\BingAds\V13\CampaignManagement\Audience;
use Microsoft\BingAds\V13\CampaignManagement\AudienceCriterion;
use Microsoft\BingAds\V13\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\V13\CampaignManagement\AudienceType;
use Microsoft\BingAds\V13\CampaignManagement\RemarketingList;
use Microsoft\BingAds\V13\CampaignManagement\CustomEventsRule;
use Microsoft\BingAds\V13\CampaignManagement\PageVisitorsRule;
use Microsoft\BingAds\V13\CampaignManagement\PageVisitorsWhoDidNotVisitAnotherPageRule;
use Microsoft\BingAds\V13\CampaignManagement\PageVisitorsWhoVisitedAnotherPageRule;
use Microsoft\BingAds\V13\CampaignManagement\RuleItemGroup;
use Microsoft\BingAds\V13\CampaignManagement\StringRuleItem;
use Microsoft\BingAds\V13\CampaignManagement\EntityScope;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\Bid;
use Microsoft\BingAds\V13\CampaignManagement\Date;
use Microsoft\BingAds\V13\CampaignManagement\Setting;
use Microsoft\BingAds\V13\CampaignManagement\TargetSettingDetail;
use Microsoft\BingAds\V13\CampaignManagement\TargetSetting;
use Microsoft\BingAds\V13\CampaignManagement\CriterionTypeGroup;

// Specify the Microsoft\BingAds\V13\CustomerManagement classes that will be used.
use Microsoft\BingAds\V13\CustomerManagement\Account;
use Microsoft\BingAds\V13\CustomerManagement\User;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    // Before you can track conversions or target audiences using a remarketing list 
    // you need to create a UET tag, and then add the UET tag tracking code to every page of your website.
    // For more information, please see Universal Event Tracking at https://go.microsoft.com/fwlink/?linkid=829965.

    // First you should call the GetUetTagsByIds operation to check whether a tag has already been created. 
    // You can leave the TagIds element null or empty to request all UET tags available for the customer.

    print("-----\r\nGetUetTagsByIds:\r\n");
    $uetTags = CampaignManagementExampleHelper::GetUetTagsByIds(
        null
    )->UetTags;

    // If you do not already have a UET tag that can be used, or if you need another UET tag, 
    // call the AddUetTags service operation to create a new UET tag. If the call is successful, 
    // the tracking script that you should add to your website is included in a corresponding 
    // UetTag within the response message. 

    if (count($uetTags) < 1)
    {
        $uetTag = new UetTag();
        $uetTag->Description = "My First Uet Tag";
        $uetTag->Name = "New Uet Tag";
        print("-----\r\nAddUetTags:\r\n");
        $uetTags = CampaignManagementExampleHelper::AddUetTags(
            array($uetTag)
        )->UetTags;
    }

    if (count($uetTags) < 1)
    {
        printf(
            "You do not have any UET tags registered for CustomerId {0}.", 
            $GLOBALS['AuthorizationData']->CustomerId
        );
        return;
    }

    print("List of all UET Tags:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfUetTag($uetTags);

    // After you retreive the tracking script from the AddUetTags or GetUetTagsByIds operation, 
    // the next step is to add the UET tag tracking code to your website. 

    // We will use the same UET tag for the remainder of this example.
    $tagId = $uetTags->UetTag[0]->Id;
    
    // Add remarketing lists that depend on the UET Tag Id retreived above.

    $audiences = array();
    $customEventsList = new RemarketingList();
    $customEventsList->Description="New list with CustomEventsRule";
    $customEventsList->MembershipDuration=30;
    $customEventsList->Name="Remarketing List with CustomEventsRule " . $_SERVER['REQUEST_TIME'];
    $customEventsList->ParentId = $GLOBALS['AuthorizationData']->AccountId;
    // The rule definition is translated to the following logical expression: 
    // (Category Equals video) and (Action Equals play) and (Label Equals trailer) 
    // and (Value Equals 5)
    $customEventsRule = new CustomEventsRule();
    // The type of user interaction you want to track.
    $customEventsRule->Action="play";
    $customEventsRule->ActionOperator='Equals';
    // The category of event you want to track. 
    $customEventsRule->Category="video";
    $customEventsRule->CategoryOperator='Equals';
    // The name of the element that caused the action.
    $customEventsRule->Label="trailer";
    $customEventsRule->LabelOperator='Equals';
    // A numerical value associated with that event. 
    // Could be length of the video played etc.
    $customEventsRule->Value=5.00;
    $customEventsRule->ValueOperator='Equals';
    $customEventsList->Rule = new SoapVar(
        $customEventsRule, 
        SOAP_ENC_OBJECT, 
        'CustomEventsRule', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );  
    $customEventsList->Scope='Account';
    $customEventsList->TagId = $tagId;     
    $audiences[] = new SoapVar(
        $customEventsList, 
        SOAP_ENC_OBJECT, 
        'RemarketingList', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );       
                
    $pageVisitorsList = new RemarketingList();  
    $pageVisitorsList->Description="New list with PageVisitorsRule";
    $pageVisitorsList->MembershipDuration=30;
    $pageVisitorsList->Name="Remarketing List with PageVisitorsRule " . $_SERVER['REQUEST_TIME'];
    $pageVisitorsList->ParentId = $GLOBALS['AuthorizationData']->AccountId;
    // The rule definition is translated to the following logical expression: 
    // ((Url Contains X) and (ReferrerUrl DoesNotContain Z)) or ((Url DoesNotBeginWith Y)) 
    // or ((ReferrerUrl Equals Z))
    $pageVisitorsRule = new PageVisitorsRule();
    $pageVisitorsRuleItemGroups = array();
    $pageVisitorsRuleItemGroupA = new RuleItemGroup();
    $pageVisitorsRuleItemsA = array();
    $pageVisitorsRuleItemA = new StringRuleItem();
    $pageVisitorsRuleItemA->Operand = "Url";
    $pageVisitorsRuleItemA->Operator = 'Contains';
    $pageVisitorsRuleItemA->Value = "X";
    $pageVisitorsRuleItemsA[] = new SoapVar(
        $pageVisitorsRuleItemA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );        
    $pageVisitorsRuleItemAA = new StringRuleItem();
    $pageVisitorsRuleItemAA->Operand = "ReferrerUrl";
    $pageVisitorsRuleItemAA->Operator = 'DoesNotContain';
    $pageVisitorsRuleItemAA->Value = "Z";
    $pageVisitorsRuleItemsA[] = new SoapVar(
        $pageVisitorsRuleItemAA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );    
    $pageVisitorsRuleItemGroupA->Items = $pageVisitorsRuleItemsA;
    $pageVisitorsRuleItemGroups[] = $pageVisitorsRuleItemGroupA;
    $pageVisitorsRuleItemGroupB = new RuleItemGroup();
    $pageVisitorsRuleItemsB = array();
    $pageVisitorsRuleItemB = new StringRuleItem();
    $pageVisitorsRuleItemB->Operand = "Url";
    $pageVisitorsRuleItemB->Operator = 'DoesNotBeginWith';
    $pageVisitorsRuleItemB->Value = "Y";
    $pageVisitorsRuleItemsB[] = new SoapVar(
        $pageVisitorsRuleItemB, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );          
    $pageVisitorsRuleItemGroupB->Items = $pageVisitorsRuleItemsB;
    $pageVisitorsRuleItemGroups[] = $pageVisitorsRuleItemGroupB;
    $pageVisitorsRuleItemGroupC = new RuleItemGroup();
    $pageVisitorsRuleItemsC = array();
    $pageVisitorsRuleItemC = new StringRuleItem();
    $pageVisitorsRuleItemC->Operand = "ReferrerUrl";
    $pageVisitorsRuleItemC->Operator = 'Equals';
    $pageVisitorsRuleItemC->Value = "Z";
    $pageVisitorsRuleItemsC[] = new SoapVar(
        $pageVisitorsRuleItemC, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );                   
    $pageVisitorsRuleItemGroupC->Items = $pageVisitorsRuleItemsC;
    $pageVisitorsRuleItemGroups[] = $pageVisitorsRuleItemGroupC;
    $pageVisitorsRule->RuleItemGroups = $pageVisitorsRuleItemGroups;
    $pageVisitorsList->Rule = new SoapVar(
        $pageVisitorsRule, 
        SOAP_ENC_OBJECT, 
        'PageVisitorsRule', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );  
    $pageVisitorsList->Scope='Account';
    $pageVisitorsList->TagId = $tagId; 
    $audiences[] = new SoapVar(
        $pageVisitorsList, 
        SOAP_ENC_OBJECT, 
        'RemarketingList', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );  
    
    $pageVisitorsWhoDidNotVisitAnotherPageList = new RemarketingList();        
    $pageVisitorsWhoDidNotVisitAnotherPageList->Description="New list with PageVisitorsWhoDidNotVisitAnotherPageRule";
    $pageVisitorsWhoDidNotVisitAnotherPageList->MembershipDuration=30;
    $pageVisitorsWhoDidNotVisitAnotherPageList->Name="Remarketing List with PageVisitorsWhoDidNotVisitAnotherPageRule " 
        . $_SERVER['REQUEST_TIME'];
    $pageVisitorsWhoDidNotVisitAnotherPageList->ParentId = $GLOBALS['AuthorizationData']->AccountId;
    // The rule definition is translated to the following logical expression: 
    // (((Url Contains X) and (ReferrerUrl DoesNotContain Z)) or ((Url DoesNotBeginWith Y)) 
    // or ((ReferrerUrl Equals Z))) 
    // and not (((Url BeginsWith A) and (ReferrerUrl BeginsWith B)) or ((Url Contains C)))
    $pageVisitorsWhoDidNotVisitAnotherPageRule = new PageVisitorsWhoDidNotVisitAnotherPageRule();            
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroups = array();
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroupA = new RuleItemGroup();
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemsA = array();
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemA = new StringRuleItem();
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemA->Operand = "Url";
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemA->Operator = 'BeginsWith';
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemA->Value = "A";
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemsA[] = new SoapVar(
        $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );   
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemAA = new StringRuleItem();
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemAA->Operand = "ReferrerUrl";
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemAA->Operator = 'BeginsWith';
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemAA->Value = "B";
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemsA[] = new SoapVar(
        $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemAA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );   
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroupA->Items = $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemsA;
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroups[] = $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroupA;
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroupB = new RuleItemGroup();
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemsB = array();
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemB = new StringRuleItem();
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemB->Operand = "Url";
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemB->Operator = 'Contains';
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemB->Value = "C";
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemsB[] = new SoapVar(
        $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemB, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );            
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroupB->Items = $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemsB;
    $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroups[] = $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroupB;
    $pageVisitorsWhoDidNotVisitAnotherPageRule->ExcludeRuleItemGroups = $pageVisitorsWhoDidNotVisitAnotherPageExcludeRuleItemGroups;            
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroups = array();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroupA = new RuleItemGroup();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsA = array();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemA = new StringRuleItem();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemA->Operand = "Url";
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemA->Operator = 'Contains';
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemA->Value = "X";
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsA[] = new SoapVar(
        $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );   
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemAA = new StringRuleItem();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemAA->Operand = "ReferrerUrl";
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemAA->Operator = 'DoesNotContain';
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemAA->Value = "Z";
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsA[] = new SoapVar(
        $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemAA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );   
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroupA->Items = $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsA;
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroups[] = $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroupA;
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroupB = new RuleItemGroup();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsB = array();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemB = new StringRuleItem();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemB->Operand = "Url";
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemB->Operator = 'DoesNotBeginWith';
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemB->Value = "Y";
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsB[] = new SoapVar(
        $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemB, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );          
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroupB->Items = $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsB;
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroups[] = $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroupB;
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroupC = new RuleItemGroup();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsC = array();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemC = new StringRuleItem();
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemC->Operand = "ReferrerUrl";
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemC->Operator = 'Equals';
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemC->Value = "Z";
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsC[] = new SoapVar(
        $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemC, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );             
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroupC->Items = $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemsC;
    $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroups[] = $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroupC;
    $pageVisitorsWhoDidNotVisitAnotherPageRule->IncludeRuleItemGroups = $pageVisitorsWhoDidNotVisitAnotherPageIncludeRuleItemGroups;
    $pageVisitorsWhoDidNotVisitAnotherPageList->Rule = new SoapVar(
        $pageVisitorsWhoDidNotVisitAnotherPageRule, 
        SOAP_ENC_OBJECT, 
        'PageVisitorsWhoDidNotVisitAnotherPageRule', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );  
    $pageVisitorsWhoDidNotVisitAnotherPageList->Scope='Account';
    $pageVisitorsWhoDidNotVisitAnotherPageList->TagId = $tagId;   
    $audiences[] = new SoapVar(
        $pageVisitorsWhoDidNotVisitAnotherPageList, 
        SOAP_ENC_OBJECT, 
        'RemarketingList', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    ); 

    $pageVisitorsWhoVisitedAnotherPageList = new RemarketingList();  
    $pageVisitorsWhoVisitedAnotherPageList->Description="New list with PageVisitorsWhoVisitedAnotherPageRule";
    $pageVisitorsWhoVisitedAnotherPageList->MembershipDuration=30;
    $pageVisitorsWhoVisitedAnotherPageList->Name="Remarketing List with PageVisitorsWhoVisitedAnotherPageRule " 
        . $_SERVER['REQUEST_TIME'];
    $pageVisitorsWhoVisitedAnotherPageList->ParentId = $GLOBALS['AuthorizationData']->AccountId;
    // The rule definition is translated to the following logical expression: 
    // (((Url Contains X) and (ReferrerUrl NotEquals Z)) or ((Url DoesNotBeginWith Y)) or 
    // ((ReferrerUrl Equals Z))) 
    // and (((Url BeginsWith A) and (ReferrerUrl BeginsWith B)) or ((Url Contains C)))
    $pageVisitorsWhoVisitedAnotherPageRule = new PageVisitorsWhoVisitedAnotherPageRule();         
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroups = array();
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroupA = new RuleItemGroup();
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemsA = array();
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemA = new StringRuleItem();
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemA->Operand = "Url";
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemA->Operator = 'BeginsWith';
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemA->Value = "A";
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemsA[] = new SoapVar(
        $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );   
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemAA = new StringRuleItem();
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemAA->Operand = "ReferrerUrl";
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemAA->Operator = 'BeginsWith';
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemAA->Value = "B";
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemsA[] = new SoapVar(
        $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemAA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );    
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroupA->Items = $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemsA;
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroups[] = $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroupA;
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroupB = new RuleItemGroup();
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemsB = array();
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemB = new StringRuleItem();
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemB->Operand = "Url";
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemB->Operator = 'Contains';
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemB->Value = "C";
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemsB[] = new SoapVar(
        $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemB, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );            
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroupB->Items = $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemsB;
    $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroups[] = $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroupB;
    $pageVisitorsWhoVisitedAnotherPageRule->AnotherRuleItemGroups = $pageVisitorsWhoVisitedAnotherPageAnotherRuleItemGroups;            
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroups = array();
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroupA = new RuleItemGroup();
    $pageVisitorsWhoVisitedAnotherPageRuleItemsA = array();
    $pageVisitorsWhoVisitedAnotherPageRuleItemA = new StringRuleItem();
    $pageVisitorsWhoVisitedAnotherPageRuleItemA->Operand = "Url";
    $pageVisitorsWhoVisitedAnotherPageRuleItemA->Operator = 'Contains';
    $pageVisitorsWhoVisitedAnotherPageRuleItemA->Value = "X";
    $pageVisitorsWhoVisitedAnotherPageRuleItemsA[] = new SoapVar(
        $pageVisitorsWhoVisitedAnotherPageRuleItemA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );    
    $pageVisitorsWhoVisitedAnotherPageRuleItemAA = new StringRuleItem();
    $pageVisitorsWhoVisitedAnotherPageRuleItemAA->Operand = "ReferrerUrl";
    $pageVisitorsWhoVisitedAnotherPageRuleItemAA->Operator = 'DoesNotContain';
    $pageVisitorsWhoVisitedAnotherPageRuleItemAA->Value = "Z";
    $pageVisitorsWhoVisitedAnotherPageRuleItemsA[] = new SoapVar(
        $pageVisitorsWhoVisitedAnotherPageRuleItemAA, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );     
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroupA->Items = $pageVisitorsWhoVisitedAnotherPageRuleItemsA;
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroups[] = $pageVisitorsWhoVisitedAnotherPageRuleItemGroupA;
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroupB = new RuleItemGroup();
    $pageVisitorsWhoVisitedAnotherPageRuleItemsB = array();
    $pageVisitorsWhoVisitedAnotherPageRuleItemB = new StringRuleItem();
    $pageVisitorsWhoVisitedAnotherPageRuleItemB->Operand = "Url";
    $pageVisitorsWhoVisitedAnotherPageRuleItemB->Operator = 'DoesNotBeginWith';
    $pageVisitorsWhoVisitedAnotherPageRuleItemB->Value = "Y";
    $pageVisitorsWhoVisitedAnotherPageRuleItemsB[] = new SoapVar(
        $pageVisitorsWhoVisitedAnotherPageRuleItemB, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );            
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroupB->Items = $pageVisitorsWhoVisitedAnotherPageRuleItemsB;
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroups[] = $pageVisitorsWhoVisitedAnotherPageRuleItemGroupB;
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroupC = new RuleItemGroup();
    $pageVisitorsWhoVisitedAnotherPageRuleItemsC = array();
    $pageVisitorsWhoVisitedAnotherPageRuleItemC = new StringRuleItem();
    $pageVisitorsWhoVisitedAnotherPageRuleItemC->Operand = "ReferrerUrl";
    $pageVisitorsWhoVisitedAnotherPageRuleItemC->Operator = 'Equals';
    $pageVisitorsWhoVisitedAnotherPageRuleItemC->Value = "Z";
    $pageVisitorsWhoVisitedAnotherPageRuleItemsC[] = new SoapVar(
        $pageVisitorsWhoVisitedAnotherPageRuleItemC, 
        SOAP_ENC_OBJECT, 
        'StringRuleItem', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );             
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroupC->Items = $pageVisitorsWhoVisitedAnotherPageRuleItemsC;
    $pageVisitorsWhoVisitedAnotherPageRuleItemGroups[] = $pageVisitorsWhoVisitedAnotherPageRuleItemGroupC;
    $pageVisitorsWhoVisitedAnotherPageRule->RuleItemGroups = $pageVisitorsWhoVisitedAnotherPageRuleItemGroups;
    $pageVisitorsWhoVisitedAnotherPageList->Rule = new SoapVar(
        $pageVisitorsWhoVisitedAnotherPageRule, 
        SOAP_ENC_OBJECT, 
        'PageVisitorsWhoVisitedAnotherPageRule', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );  
    $pageVisitorsWhoVisitedAnotherPageList->Scope='Account';
    $pageVisitorsWhoVisitedAnotherPageList->TagId = $tagId;   
    $audiences[] = new SoapVar(
        $pageVisitorsWhoVisitedAnotherPageList, 
        SOAP_ENC_OBJECT, 
        'RemarketingList', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    ); 

    // RemarketingList extends the Audience base class. 
    // We manage remarketing lists with Audience operations.

    print("-----\r\nAddAudiences:\r\n");
    $addAudiencesResponse = CampaignManagementExampleHelper::AddAudiences(
        $audiences
    );
    $audienceIds = $addAudiencesResponse->AudienceIds;
    print("AudienceIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($audienceIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addAudiencesResponse->PartialErrors);
                
    // Add an ad group in a campaign. The ad group will later be associated with remarketing lists. 
    
    $campaigns = array();   
    $campaign = new Campaign();
    $campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->Languages = array("All");
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaigns[] = $campaign;
    
    print("-----\r\nAddCampaigns:\r\n");
    $addCampaignsResponse = CampaignManagementExampleHelper::AddCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaigns
    );
    $campaignIds = $addCampaignsResponse->CampaignIds;
    print("CampaignIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($campaignIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addCampaignsResponse->PartialErrors);
    
    $adGroups = array();
    $adGroup = new AdGroup();
    $adGroup->CpcBid = new Bid();
    $adGroup->CpcBid->Amount = 0.09;
    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");
    $adGroup->EndDate = $endDate;
    $adGroup->Name = "Women's Red Shoe Sale";    
    $adGroup->StartDate = null;    
    // Applicable for all remarketing lists that are associated with this ad group. TargetAndBid indicates 
    // that you want to show ads only to people included in the remarketing list, with the option to change
    // the bid amount. Ads in this ad group will only show to people included in the remarketing list. 
    $adGroupSettings = array();
    $adGroupTargetSetting = new TargetSetting();
    $adGroupAudienceTargetSettingDetail = new TargetSettingDetail();
    $adGroupAudienceTargetSettingDetail->CriterionTypeGroup = CriterionTypeGroup::Audience;
    $adGroupAudienceTargetSettingDetail->TargetAndBid = True;
    $adGroupTargetSetting->Details = array();
    $adGroupTargetSetting->Details[] = $adGroupAudienceTargetSettingDetail;
    $encodedAdGroupTargetSetting = new SoapVar(
        $adGroupTargetSetting, 
        SOAP_ENC_OBJECT, 
        'TargetSetting', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adGroupSettings[] = $encodedAdGroupTargetSetting;
    $adGroup->Settings=$adGroupSettings;
    $adGroups[] = $adGroup;
 
    print("-----\r\nAddAdGroups:\r\n");
    $addAdGroupsResponse = CampaignManagementExampleHelper::AddAdGroups(
        $campaignIds->long[0], 
        $adGroups,
        null
    );
    $adGroupIds = $addAdGroupsResponse->AdGroupIds;
    print("AdGroupIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($adGroupIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdGroupsResponse->PartialErrors);

    // Associate all of the remarketing lists created above with the new ad group.

    $adGroupCriterions = array();

    foreach ($audienceIds->long as $audienceId)
    {
        if ($audienceId != null)
        {
            $adGroupCriterion = new BiddableAdGroupCriterion();
            
            $criterion = new AudienceCriterion();
            $criterion->AudienceId = $audienceId;
            $criterion->AudienceType = AudienceType::RemarketingList;
            $adGroupCriterion->Criterion = new SoapVar(
                $criterion, 
                SOAP_ENC_OBJECT, 
                'AudienceCriterion', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace()
            );

            $criterionBid = new BidMultiplier();
            $criterionBid->Multiplier = 20.00;
            $adGroupCriterion->CriterionBid = new SoapVar(
                $criterionBid, 
                SOAP_ENC_OBJECT, 
                'BidMultiplier', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace()
            );

            $adGroupCriterion->AdGroupId = $adGroupIds->long[0];
            $adGroupCriterion->Status = AdGroupCriterionStatus::Active;
            
            $adGroupCriterions[] = new SoapVar(
                $adGroupCriterion, 
                SOAP_ENC_OBJECT, 
                'BiddableAdGroupCriterion', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace()
            );
        }
    }

    print("-----\r\nAddAdGroupCriterions:\r\n");
    $addAdGroupCriterionsResponse = CampaignManagementExampleHelper::AddAdGroupCriterions(
        $adGroupCriterions, 
        AdGroupCriterionType::Audience
    );
    $adGroupCriterionIds = $addAdGroupCriterionsResponse->AdGroupCriterionIds;
    print("AdGroupCriterionIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($adGroupCriterionIds);
    $adGroupCriterionErrors = $addAdGroupCriterionsResponse->NestedPartialErrors;
    print("NestedPartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($adGroupCriterionErrors);
    
    // Delete the campaign and everything it contains e.g., ad groups and ads.

    print("-----\r\nDeleteCampaigns:\r\n");
    CampaignManagementExampleHelper::DeleteCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        array($campaignIds->long[0])
    );
    printf("Deleted CampaignId %s\r\n", $campaignIds->long[0]);
}
catch (SoapFault $e)
{
	printf("-----\r\nFault Code: %s\r\nFault String: %s\r\nFault Detail: \r\n", $e->faultcode, $e->faultstring);
    var_dump($e->detail);
	print "-----\r\nLast SOAP request/response:\r\n";
    print $GLOBALS['Proxy']->GetWsdl() . "\r\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\r\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\r\n";
}
catch (Exception $e)
{
    // Ignore fault exceptions that we already caught.
    if ($e->getPrevious())
    { ; }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}
