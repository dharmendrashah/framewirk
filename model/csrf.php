<?php
function csrf_field(){
    $sessionProvider = new EasyCSRF\NativeSessionProvider();
$easyCSRF = new EasyCSRF\EasyCSRF($sessionProvider);

$csrfToken = $easyCSRF->generate('my_token');
return $csrfToken;
}

