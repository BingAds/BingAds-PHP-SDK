<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__ . "/CustomerManagementExampleHelper.php";

include __DIR__ . "/AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CustomerManagement classes that will be used.
use Microsoft\BingAds\V13\CustomerManagement\LCID;
use Microsoft\BingAds\V13\CustomerManagement\Predicate;
use Microsoft\BingAds\V13\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\V13\CustomerManagement\UserInvitation;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CustomerManagementExampleHelper;

// Specify the email address where the invitation should be sent. 
// It is important to note that the recipient can accept the invitation 
// and sign into Bing Ads with a Microsoft account different than the invitation email address.
$userInviteRecipientEmail = "UserInviteRecipientEmailGoesHere";

try
{
    print("You must edit this example to provide the email address (userInviteRecipientEmail) for the user invitation.\r\n");
    print("You must use Super Admin credentials to send a user invitation.\r\n");

    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    $customerId = $GLOBALS['AuthorizationData']->CustomerId;

    // Prepare to invite a new user
    $userInvitation = new UserInvitation();
            
    // The identifier of the customer this user is invited to manage. 
    // The AccountIds element determines which customer accounts the user can manage.
    $userInvitation->CustomerId = $customerId;

    // Users with account level roles such as Advertiser Campaign Manager can be restricted to specific accounts. 
    // Users with customer level roles such as Super Admin can access all accounts within the user's customer, 
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

    print("-----\r\nSendUserInvitation:\r\n");
    $userInvitationId = CustomerManagementExampleHelper::SendUserInvitation(
        $userInvitation
    )->UserInvitationId;
    printf("Sent new user invitation to %s.\r\n", $userInviteRecipientEmail);

    // It is possible to have multiple pending invitations sent to the same email address, 
    // which have not yet expired. It is also possible for those invitations to have specified 
    // different user roles, for example if you sent an invitation with an incorrect user role 
    // and then sent a second invitation with the correct user role. The recipient can accept 
    // any of the invitations. The Bing Ads API does not support any operations to delete 
    // pending user invitations. After you invite a user, the only way to cancel the invitation 
    // is through the Bing Ads web application. You can find both pending and accepted invitations 
    // in the Users section of Accounts & Billing.

    // Since a recipient can accept the invitation with credentials that differ from 
    // the invitation email address, you cannot determine with certainty the mapping from UserInvitation 
    // to accepted User. You can only determine whether the invitation has been accepted or has expired. 
    // The SearchUserInvitations operation returns all pending invitations, whether or not they have expired. 
    // Accepted invitations are not included in the SearchUserInvitations response.  

    $predicates = array();
    $predicate = new Predicate();
    $predicate->Field = "CustomerId";
    $predicate->Operator = PredicateOperator::In;
    $predicate->Value = $customerId;
    $predicates[] = $predicate;
    
    print("-----\r\nSearchUserInvitations:\r\n");
    $userInvitations = CustomerManagementExampleHelper::SearchUserInvitations(
        $predicates
    )->UserInvitations;
    print("UserInvitations:\r\n");
    CustomerManagementExampleHelper::OutputArrayOfUserInvitation($userInvitations);

    // After the invitation has been accepted, you can call GetUsersInfo and GetUser to access the Bing Ads user details. 
    // Once again though, since a recipient can accept the invitation with credentials that differ from 
    // the invitation email address, you cannot determine with certainty the mapping from UserInvitation 
    // to accepted User. 

    print("-----\r\nGetUsersInfo:\r\n");
    $usersInfo = CustomerManagementExampleHelper::GetUsersInfo(
        $customerId, 
        null
    )->UsersInfo;
    print("UsersInfo:\r\n");
    CustomerManagementExampleHelper::OutputArrayOfUserInfo($usersInfo);
    
    foreach ($usersInfo->UserInfo as $userInfo)
    {
        print("-----\r\nGetUser:\r\n");
        $getUserResponse = CustomerManagementExampleHelper::GetUser(
            $userInfo->Id, 
            true
        );
        $user = $getUserResponse->User;
        print("User:\r\n");
        CustomerManagementExampleHelper::OutputUser($user);
        print("CustomerRoles:\r\n");
        CustomerManagementExampleHelper::OutputArrayOfCustomerRole($getUserResponse->CustomerRoles);
    }    
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
        print $e->getCode()." ".$e->getMessage()."\r\n";
        print $e->getTraceAsString()."\r\n";
    }
}
