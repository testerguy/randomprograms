<?php


echo <<<EOD

<input type="text" id="yeah" />

<input type="submit" id="submit"/>
<div id="output"></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
  $("#submit").onclick(function(){
    $("#output").text=$("#yeah").html();
    });
  });


</script>

EOD;

// test edit 

?>
