<?php
   require_once 'administrator/includes/functions.php';
   checkSession();

   // Header
   themeAdd('dashboard/header.php');

   // Desktop
   themeAdd('dashboard/profile.php');

   // Footer
   themeAdd('dashboard/footer.php');


?>
