<?php
/*********************** Student Number ****************************/
// Boolean check for valid student number
$isValidStudentNumber = !preg_match("/^([0-9]{9})$/", $_REQUEST['studentNumber']);
$isSuspiciousNumber = preg_match("/^([0]{9}|[1]{9}|[2]{9}|[3]{9}|[4]{9}|[5]{9}|[6]{9}|[7]{9}|[8]{9}|[9]{9})$/", $_REQUEST['studentNumber']);
// Boolean check if input is empty
$isEmpty = ($_REQUEST['studentNumber'] == "");

if($isEmpty)
{
    echo 4;
}
else if($isValidStudentNumber)
{
  echo 2;
}
else if($isSuspiciousNumber) 
{
  echo 1;
}
else 
{
  echo 3;
}
?>