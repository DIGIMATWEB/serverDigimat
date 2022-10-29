<?php
$serverName = "200.92.216.34, 4326";
$mypas='$#.MD2120_*1';
$connectionInfo = array( "Database"=>"DB_CORPORATIVA_DEV", "UID"=>"deliverydm", "PWD"=>'$#.MD2120_*1');
$conn = sqlsrv_connect( $serverName, $connectionInfo)or die("Could not connect to database: ".mssql_get_last_message());
if( $conn ) {
//  echo "Conexión establecida.<br />";
}else{
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}
sqlsrv_close( $conn );
 ?>
