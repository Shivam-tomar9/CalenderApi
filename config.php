<?php
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','api');

//Google api configuration
define('GOOGLE_CLIENT_ID','280479636475-o71u7pn2988on9eb2t57rntko97eic68.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET','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');
define('GOOGLE_OAUTH_SCOPE','https://www.googleapis.com/auth/drive');
define('REDIRECT_URI','http://localhost/Api/google_drive_sync.php');

//Start Session
if(!session_id()) session_start();

//Google OAuth Url
 $googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 
    
?>