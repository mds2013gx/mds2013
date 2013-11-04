<?php
 $app_path = realpath(dirname(__FILE__));
 define ('__APP_PATH', $app_path);

 include __APP_PATH.'/view/header.php'; 
 include __APP_PATH.'/view/viewController.php';
 include __APP_PATH.'/view/navigation.php'; 
 include __APP_PATH.'/view/footer.php';
?>