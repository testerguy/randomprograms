<?php

if (isset($_POST[animal]))
{
$animal=$_POST[animal];
$a=array("cat","dog","cow","horse","sheep","goat","chicken","pig","horse");

if (in_array((strtolower($animal)),$a))
  {
  echo "a $animal is a farm animal";
  }
else
  {
  echo "a $animal is not a farm animal";
  } 
}
else
{
echo "<form action='' method='post'>Type an animal name: <input type='text' name='animal'/><input type='submit' value='Submit'/></form>";
}
?>
