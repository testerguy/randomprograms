<?php

$q=$_GET[q];

$xmldoc=new DOMDocument();

if ($q=="Google")
{
$xmldoc->load("Google.xml");
}
elseif ($q=="MSNBC")
{
$xmldoc->load("MSNBC.xml");
}

$channel=$xmldoc->getElementsByTagName("channel")->item(0);

$channel_title=$channel->getElementsByTagName("title")->item(0)->childNodes->item(0)->nodeValue;

$channel_link=$channel->getElementsByTagName("link")->item(0)->childNodes->item(0)->nodeValue;

$channel_desc=$channel->getElementsByTagName("description")->item(0)->childNodes->item(0)->nodeValue;

echo "<a href='".$channel_link."'>".$channel_title."</a><br/>";
echo $channel_desc;

$x=$xmldoc->getElementsByTagName("item");

for ($i=0;$i<3;$i++)
  {
  if ($x->item($i)->getElementsByTagName("title")->item(0)->nodeType==1)
    {
    $item_title=$x->item($i)->getElementsByTagName("title")->item(0)->childNodes->item(0)->nodeValue;
    $item_link=$x->item($i)->getElementsByTagName("link")->item(0)->childNodes->item(0)->nodeValue;
    $item_desc=$x->item($i)->getElementsByTagname("description")->item(0)->childNodes->item(0)->nodeValue;
    echo "<br/><a href='".$item_link."'>".$item_title."</a><br/>";
    echo $item_desc;
    }
  }

?>



