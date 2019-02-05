<?php
// Fictitious name 1
$fictitiousName1 = "Harry Potter";
// Fictitious name 2
$fictitiousName2 = "Hermione Granger";
// Boolean check for fictitious names
$isFictitious = strtolower($_REQUEST['studentName']) == strtolower($fictitiousName1) || strtolower($_REQUEST['studentName']) == strtolower($fictitiousName2);
// Boolean check for inproper name format
$isInvalid = !preg_match("/^([a-zA-Z' ]+)$/", $_REQUEST['studentName']);

  if($isFictitious)
  {
    echo 1;
  }
  else if($isInvalid)
  {
    echo 2;    
  }
  else {
    echo 3;
  }
?>