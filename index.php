<?php

require_once('common.php');

if (!isset($_GET) || empty($_GET))
{
 echo "You are not authorised person to access this page";
}
else
{
 date_default_timezone_set('UTC');
 $minus = 120;
 $created = date('YmdHis');
 $value= $_GET["id"];
 $min = $created - $minus;  
  
  if (( $min <= $value) && ($value <= $created  ))
  {
    require_once 'main.php';
  }
else
  { 
   echo "You are not authorised person to access this page";
  } 
  
}

?>