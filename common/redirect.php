
<?php
$user = current_user();
        
if (!$user) {
     $_SESSION["referredFromTranscribe"] = substr(Zend_Controller_Front::getInstance()->getRequest()->getRequestUri(),strlen(Zend_Controller_Front::getInstance()->getRequest()->getBaseUrl()));
}

?>