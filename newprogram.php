<?php

echo <<<EOD

<input type="text" id="yeah" />

<!--<input type="submit" id="submit"/>-->
<div>Mirror: <span id="output"> </span></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
  $("#yeah").keyup(function(){
    var newvalue=$("#yeah").val();
    $("#output").text(newvalue);
    });
  });


</script>

EOD;

?>
