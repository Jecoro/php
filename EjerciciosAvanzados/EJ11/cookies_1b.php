<?php


$color = isset($_COOKIE['cookieColor'])?$_COOKIE['cookieColor']:'';

print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>

  <title>Selección de colores</title>";
 
if ($color=='rojo') {
  print   "<style type=\"text/css\">body, a { color: red; }</style>\n";
} elseif ($color=='azul') {
  print "  <style type=\"text/css\">body, a { color: blue; }</style>\n";
} elseif ($color=='verde') {
  print "  <style type=\"text/css\">body, a { color: green; }</style>\n";
}

print "</head>

<body>
<h1>Selección de colores</h1>\n";
if ($color=='') {
    print "<p>No se ha elegido ningún color.</p>\n";
} else {
    print "<p>Se ha elegido el color $color.</p>\n";
}

print "<p><a href=\"cookies_1a.php\">Volver a la selección de color</a></p>";

?>