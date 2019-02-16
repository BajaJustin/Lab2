<?php
/*********************** Program ******************************/
// Fictitious programs 1
$fictitiousProgram1 = "Basket Weaving";
// Fictitious programs 2
$fictitiousProgram2 = "Beanstalk Climbing";
// Boolean check for fictitious programs
$isFictitiousProgram = strtolower($_REQUEST['programName']) == strtolower($fictitiousProgram1) || strtolower($_REQUEST['programName']) == strtolower($fictitiousProgram2);
// Invalid Program programs 1
$invalidProgramName1 = "Geology";
// Invalid Program programs 2
$invalidProgramName2 = "Microbiology";
// Boolean check for invalid program
$isValidProgram = strtolower($_REQUEST['programName']) == strtolower($invalidProgramName1) || strtolower($_REQUEST['programName']) == strtolower($invalidProgramName2);
// Boolean check for empty text
$isEmpty = !($_REQUEST['programName'] == "");

if($isFictitiousProgram)
{
  echo 1;
}
else if($isValidProgram)
{
  echo 2;
}
else if($isEmpty)
{
  echo 3;
}
else
{
  echo 4;
}
?>