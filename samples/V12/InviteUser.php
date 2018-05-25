<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

require_once "/CustomerManagementExampleHelper.php";

include "/AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CustomerManagement classes that will be used.
use Microsoft\BingAds\V12\CustomerManagement\LCID;
use Microsoft\BingAds\V12\CustomerManagement\Predicate;
use Microsoft\BingAds\V12\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\V12\CustomerManagement\UserInvitation;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\CustomerManagementExampleHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerManagementProxy'] = null; 

// Specify the email address where the invitation should be sent. 
// It is important to note that the recipient can accept the invitation 
// and sign into Bing Ads with a Microsoft account different than the invitation email address.
$userInviteRecipientEmail = "UserInviteRecipientEmailGoesHere";

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    print("You must edit this example to provide the email address (userInviteRecipientEmail) for the user invitation.\n");
    print("You must use Super Admin credentials to send a user invitation.\n\n");

    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $customerId = $GLOBALS['AuthorizationData']->CustomerId;

    // Prepare to invite a new user
    $userInvitation = new UserInvitation();
            
    // The identifier of the customer this user is invited to manage. 
    // The AccountIds element determines which customer accounts the user can manage.
    $userInvitation->CustomerId = $customerId;

    // Users with account level roles such as Advertiser Campaign Manager can be restricted to specific accounts. 
    // Users with customer level roles such as Super Admin can access all accounts within the user�s customer, 
    // and their access cannot be restricted to specific accounts.
    $userInvitation->AccountIds = null;

    // The user role, which determines the level of access that the user has to the accounts specified in the AccountIds element.
    // For example you can use Role Id 16 for Advertiser Campaign Manager.
    $userInvitation->RoleId = 16;

    // The email address where the invitation should be sent. This element can contain a maximum of 100 characters.
    $userInvitation->Email = $userInviteRecipientEmail;

    // The first name of the user. This element can contain a maximum of 40 characters.
    $userInvitation->FirstName = "FirstNameGoesHere";

    // The last name of the user. This element can contain a maximum of 40 characters.
    $userInvitation->LastName = "LastNameGoesHere";

    // The locale to use when sending correspondence to the user by email or postal mail. The default is EnglishUS.
    $userInvitation->Lcid = LCID::EnglishUS;
    
    
    // Once you send a user invitation, there is no option to rescind the invitation using the API.
    // You can delete a pending invitation in the Accounts & Billing -> Users tab of the Bing Ads web application. 
    $userInvitationId = CustomerManagementExampleHelper::SendUserInvitation($userInvitation)->UserInvitationId;
    printf("Sent new user invitation to %s.\n", $userInviteRecipientEmail);

    // It is possible to have multiple pending invitations sent to the same email address, 
    // which have not yet expired. It is also possible for those invitations to have specified 
    // different user roles, for example if you sent an invitation with an incorrect user role 
    // and then sent a second invitation with the correct user role. The recipient can accept 
    // any of the invitations. The Bing Ads API does not support any operations to delete 
    // pending user invitations. After you invite a user, the only way to cancel the invitation 
    // is through the Bing Ads web application. You can find both pending and accepted invitations 
    // in the Users section of Accounts & Billing.

    // Since a recipient can accept the invitation and sign into Bing Ads with a Microsoft account different 
    // than the invitation email address, you cannot determine with certainty the mapping from UserInvitation 
    // to accepted User. You can search by the invitation ID (returned by SendUserInvitations), 
    // only to the extent of finding out whether or not the invitation has been accepted or has expired. 
    // The SearchUserInvitations operation returns all pending invitations, whether or not they have expired. 
    // Accepted invitations are not included in the SearchUserInvitations response.  

    // This example searches for all user invitations of the customer that you manage,
    // and then filters the search results to find the invitation sent above.
    // Note: In this example the invitation (sent above) should be active and not expired. You can set a breakpoint 
    // and then either accept or delete the invitation in the Bing Ads web application to change the invitation status.

    $predicates = array();
    $predicate = new Predicate();
    $predicate->Field = "CustomerId";
    $predicate->Operator = PredicateOperator::In;
    $predicate->Value = $customerId;
    $predicates[] = $predicate;
    
    $userInvitations = CustomerManagementExampleHelper::SearchUserInvitations($predicates)->UserInvitations;
    print("Existing UserInvitation(s):\n");
    CustomerManagementExampleHelper::OutputArrayOfUserInvitation($userInvitations);

    // After the invitation has been accepted, you can call GetUsersInfo and GetUser to access the Bing Ads user details. 
    // Once again though, since a recipient can accept the invitation and sign into Bing Ads with a Microsoft account 
    // different than the invitation email address, you cannot determine with certainty the mapping from UserInvitation 
    // to accepted User. With the user ID returned by GetUsersInfo or GetUser, you can call DeleteUser to remove the user.

    $usersInfo = CustomerManagementExampleHelper::GetUsersInfo($customerId, null)->UsersInfo;
    
    foreach ($usersInfo->UserInfo as $userInfo)
    {
        $getUserResponse = CustomerManagementExampleHelper::GetUser($userInfo->Id);
        CustomerManagementExampleHelper::OutputUser($getUserResponse->User);
        CustomerManagementExampleHelper::OutputArrayOfCustomerRole($getUserResponse->CustomerRoles);
    }
    
}
catch (SoapFault $e)
{
    print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
    print $GLOBALS['Proxy']->GetWsdl() . "\n";
    print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    if (isset($e->detail->AdApiFaultDetail))
    {
        CustomerManagementExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
    }
    elseif (isset($e->detail->ApiFault))
    {
        CustomerManagementExampleHelper::OutputApiFault($e->detail->ApiFault);
    }
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
