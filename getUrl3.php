<?php
$url = 'http://nif-services.neuinfo.org/servicesv1/v1/summary?q=';
$q = $_GET['q'];
$q = str_replace('\\','',str_replace('&','and',$q));
//echo $q;
//$file2 = file_get_contents('http://wiki-dev.neurolex.org:8080/IDNameMatch/IDNameMatch?ID='.urlencode($q));
//echo 'http://wiki-dev.neurolex.org:8080/IDNameMatch/IDNameMatch?ID='.$q;
//echo str_replace('\\','',$file2);
//echo urlencode($q);
$file = simplexml_load_file($url.urlencode(trim($q)));
//echo $url.urlencode($q);
//echo $file2;

header('Content-type: application/xml');

echo $file->asXML();
?>
