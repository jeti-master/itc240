<?php

/*
 *config.php
 *Stores configuration data for our application
**/

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE){
  case 'template.php';
    $title = 'My template page';
    break;
  case 'index.php';
    $title = 'Home page';
    break;
  case 'contact.php';
    $title = 'Contact Page';
    break;
  case 'request.php';
    $title = 'Request Blog Page';
    break;
  default:
    $title = THIS_PAGE;
}

?>