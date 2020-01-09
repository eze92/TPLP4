<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
setlocale(LC_TIME, "spanish");
print "<p>" .  strftime( utf8_encode('<font color="white"> Hoy es : %A, %d de %B de %Y </font>') ) . "</p>\n";// imprime la hora actual del sistema

?>

