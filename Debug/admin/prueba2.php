<ul>
<?php
 $xml = simplexml_load_file('http://www.iprodich.com.ar/wp/feed','SimpleXMLElement');
$result["title"]   = $xml->xpath("/rss/channel/item/title");
$result["link"]    = $xml->xpath("/rss/channel/item/link");
$result["content"] = $xml->xpath("/rss/channel/item/content:encoded/text()");
foreach($result as $key => $attribute) {
  $i=0;
  foreach($attribute as $element) {
    $ret[$i][$key] = (string)$element;
    $i++;
  }
}
foreach($ret as $key => $det) {
  $response .= '<li>';
  $response .= "<a href=\"{$det['link']}\">{$det['title']}</a>";
  $response .= '</li>';
}
/* Ahora imprimos todos los contenidos */
echo $response;
?>
</ul>