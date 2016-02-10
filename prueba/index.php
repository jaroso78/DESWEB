<?php

$timestamp=1445594400;
date_default_timezone_set('Europe/Madrid');
echo date("d/m/Y",$timestamp);
//echo('Fecha obtenida '.strtotime($timestamp));
//echo date('c',$timestamp);

echo('<br/>');

$local = 1445072400;

echo('Fecha obtenida '. date("Y/m/d",$local));

echo('<br/>');
$data = new datetime("2015-12-20 00:00:00");
echo ('Fecha convertida: '.$data->getTimestamp());

echo('<br/>');
$fechahoy = new datetime($now);
echo ('Datetime Actual -> '.$fechahoy->getTimestamp());

echo ('<br/>');
echo('-----------------CONVERSIÓN DE UNA FECHA ---------------');
echo ('<br/>');
$fecha = new DateTime();
echo $fecha->getTimestamp();
echo ('<br/>');


//echo date ('c',$local);

?>