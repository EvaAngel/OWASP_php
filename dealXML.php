<?php
libxml_disable_entity_loader(false);
$xmlfile=file_get_contents('php://input');
$dom=new DOMDocument();
$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
$creds = simplexml_import_dom($dom);
echo "$creds->name";
echo "$creds->age";
?>
