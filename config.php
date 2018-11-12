<?php

/*
 *config.php - Stores configuration data for the application
**/

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//default page values
$title = THIS_PAGE;
$siteName = 'codeBlog{';
$slogan = 'Adventures_in_code[...]';
$heading = '';
$subheading = '';

switch(THIS_PAGE){
  case 'template.php';
    $title = 'My template page';
    $heading = 'Template File';
    $subheading = 'This content is from template.php';
    break;
  case 'index.php';
    $title = 'Home page';
    $heading = 'Home';
    $subheading = 'There\'s no place like home';
    break;
  case 'daily.php';
    $title = 'Daily Blog';
    $heading = 'Daily code blogs';
    $subheading = 'Blog, blog, blog...';
    break;
  case 'contact.php';
    $title = 'Contact Page';
    $heading = 'Contact me';
    $subheading = 'I\'d like to hear from you!';
    break;
  case 'request.php';
    $title = 'Request Blog';
    $heading = 'Request a blog';
    $subheading = 'Use this form to request a new blog entry.';
    break;
  case 'about.php';
    $title = 'About Me';
    $heading = 'About me';
    $subheading = 'This is what I do.';
    break;
  case 'blog.php';
    $title = 'Blog Entry';
    //not using $heading and $subheading on this page
    break;
  case 'blogs.php';
    $title = 'Blogs List';
    //not using $heading and $subheading on this page
    break;
}

?>