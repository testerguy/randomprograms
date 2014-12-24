<?php

//allowed extensions

$allowedexts=array("jpg","jpeg", "gif", "png");

//isolate extension of file

$extension=end(explode(".",$_FILES[file][name]));

//check extension against allowed extensions, if it is one of them, and if the size is below 20KB then continue, if not, output invalid file

if (($_FILES[file][size]<40000) && (in_array($extension,$allowedexts)))
  {
  //check if error (greater than zero if yes)
  if (!$_FILES[file][error]>0)
    {
    //output file details: name, type, size, and tmp_name
    echo "File name: ".$_FILES[file][name]."<br/>";
    echo "File type: ".$_FILES[file][type]."<br/>";
    echo "File size: ".$_FILES[file][size]."<br/>";
    echo "Temporary file: ".$_FILES[file][tmp_name]."<br/>";
    //check if file exists in upload/ dir
    if (file_exists("upload/".$_FILES[file][name]))
    //if so, output that file name exists
      {
      echo $_FILES[file][name]." already exists.<br/>";   
    //optional: output file as image
      echo "<img src='upload/".$_FILES[file][name]."'/>";
      }
    //if not, move uploaded file from tmp_name item of FILES array to upload dir, and output message if move uploaded file function fails
    else 
      {
      if (move_uploaded_file($_FILES[file][tmp_name],"upload/".$_FILES[file][name]))
        echo "File uploaded to upload/".$_FILES[file][name];
      else
        echo "Move uploaded file funciton failed;";  
      }
    }

  else
    {
    echo "error: ".$_FILES[file][error];
    }
  }

else
  {
  echo "invalid file";
  }

?>
