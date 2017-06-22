<?php 

//this line below identifies the current page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

/* below case statements are created to accommodate
unique data items for each page that will reside 
in the 'top.php' file */

switch(THIS_PAGE)
{
  
        
  case "index.php":
  $myTitle = "Tootsie's Diner | Coraopolis, PA";
  $myPagePhrase = "Family-Owned Diner Specializing in Breakfast Foods and Luncheon Specials";
  break;
        
  case "Homemade-Meatballs-Pancakes-and-Waffles-Coraopolis-PA.php":
  $myTitle = "Menu | Tootsie's Diner | Coraopolis, PA";
  $myPagePhrase = "If You Are Really Hungry, try Mark's Monster Breakfast!";
  break;
    
  case "Diner-Location-Coraopolis-PA.php":
  $myTitle = "Location | Tootsie's Diner | Coraopolis, PA";
  $myPagePhrase = "Come visit our diner located in the heart of Coraopolis, Pennsylvania";
  break;
        
  case "catering.php":
  $myTitle = "Catering | Tootsie's Diner | Coraopolis, PA";
  $myPagePhrase = "Let Tootsie's homemade dishes be a part of your next event.";
  break;
        
  case "Diner-Gallery-Coraopolis-PA.php":
  $myTitle = "Gallery | Tootsie's Diner | Coraopolis, PA";
  $myPagePhrase = "Come visit our diner in Coraopolis, Pennsylvania";
  break;
        
  case "Diner-Contact-Coraopolis-PA.php":
  $myTitle = "Contact | Tootsie's Diner | Coraopolis, PA";
  $myPagePhrase = "Please reach out with questions or comments using the information below. We look forward to hearing from you soon!";
  break;

  //fallback values for undefined pages
  default:
  $myTitle = THIS_PAGE; #the file name is unique
  $myPagePhrase = "Family-Owned Diner Specializing in Breakfast Foods and Luncheon Specials";
}

?>