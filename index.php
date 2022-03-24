<?php
    echo "Hello World!";
    echo "Localhost says hi!";
    $host=gethostbyname('db');
    echo 'Host is '+$host;
    $uname="root"
    $pas="swarna99@GB"
    $db_name="ecomdb"
    $link = mysqli_connect($host, $uname, $pas, $db_name) or die ("cannot connect");
    
    echo '------MySQL connected successfully------'
?>