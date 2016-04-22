<ul>
<?php
  $xml = new DomDocument();
  $xml->load('http://www.iprodich.com.ar/wp/feed');
  $raiz = $xml->documentElement;
  $entradas = $raiz->getElementsByTagName('item');
  for($i=0;$i<10;$i++){
    $titulo = $entradas->item($i)->getElementsByTagName('title')->item(0)->nodeValue;
    $vinculo = $entradas->item($i)->getElementsByTagName('link')->item(0)->nodeValue;
    $fecha = $entradas->item($i)->getElementsByTagName('pubDate')->item(0)->nodeValue; 
    $fecha_unix = strtotime($fecha);
    $fecha = strftime("%d/%m/%Y",$fecha_unix);
    echo '<li><a href="'.$vinculo.'">'.$titulo.'</a> '.$fecha.'</li>';
  }
?>
</ul>