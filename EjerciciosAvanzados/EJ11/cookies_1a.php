<?php

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var])) ? trim(strip_tags($_REQUEST[$var])) : '';
    if (get_magic_quotes_gpc()) {
        $tmp = stripslashes($tmp);
    }
    $tmp = str_replace('&', '&amp;',  $tmp);
    $tmp = str_replace('"', '&quot;', $tmp);
    return $tmp;
}

$color  = recoge('color');
// Si se envía un color se crea la cookie
if (($color=='rojo') || ($color=='azul') || ($color=='verde')) {
    setcookie('cookieColor', $color);

} elseif ($color=='ninguno') {
    setcookie ("cookieColor", "", time() - 3600);

} elseif (isset($_COOKIE['cookieColor'])) {
    $color = $_COOKIE['cookieColor'];
}

print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">
<!DOCTYPE html>

<head>
  <title>Selección de colores</title>
</head>

<body>
<h1>Selección de colores</h1>\n";
if ($color=='') {
    print "<p>No se ha elegido ningún color.</p>\n";
} else {
    print "<p>Se ha elegido el color $color.</p>\n";
}

print "<p>Cambio de color: <a href=\"$_SERVER[PHP_SELF]?color=rojo\">Rojo</a> -
  <a href=\"$_SERVER[PHP_SELF]?color=azul\">Azul</a> -
  <a href=\"$_SERVER[PHP_SELF]?color=verde\">Verde</a> -
  <a href=\"$_SERVER[PHP_SELF]?color=ninguno\">Ninguno</a>.</p>
<p><a href=\"cookies_1b.php\">Ir a otra página para comprobar la cookie</a></p>";

print '
</body>
</html>';


?>