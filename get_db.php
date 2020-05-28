<?php

$mysql_hostname = '192.168.0.5';//localhost

$mysql_username = 'root';//root

$mysql_password = '0000';

$mysql_database = 'iotDB';//testdb

$mysql_table = 'access';

$mysql_col1 = 'time';

$mysql_col2 = 'permit';


//$mysql_port = '3306';

$sql = "SELECT * FROM ".$mysql_table;



$connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);



mysqli_select_db($connect, $mysql_database) or die('DB 선택 실패');

$result = mysqli_query($connect, $sql);



while($info=mysqli_fetch_array($result)){

    echo $info[$mysql_col1]." | ";

    echo $info[$mysql_col2]." | ";

    echo '<br><br>';
}

mysqli_close($connect);

?>