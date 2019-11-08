<?php
namespace Microsoft\BingAds\Samples;

require_once "./vendor/autoload.php";

include "WebAuthHelper.php";

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\WebAuthHelper;

?>

<!-- 
Display a small form with a login button. In your application, you would implement code to allow
the user to either log into your service or create a new account. 
-->
<h2>Bing Ads OAuth Demo</h2>

<p>This application would like to manage your Microsoft Advertising data. Click below to login and authorize this application.</p>

<p>When you click OK below, you'll be redirected to the following URI:</p>
<p><?php echo WebAuthHelper::RedirectUri ?></p>

<!-- 
When the user presses this button, they will be redirected to fully formed URL to request an authorization token. 
From here, the user will be redirected to the RedirectUri where the authorization token can be extracted. 
-->
<input type="button" onClick="return window.location='<?php echo WebAuthHelper::RedirectUri;?>';" value="OK" />