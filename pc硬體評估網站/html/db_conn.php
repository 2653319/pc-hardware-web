<?php
header("Access-Control-Allow-Origin: *");
$link = mysqli_connect(
    "localhost",
    "108021003",
    "20001108",
    "108021003"
);
if(!$link){
    echo "Error: unable to connect to MySQL" . PHP_EOL . "<br/>";
    echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL . "<br/>";
    echo "Debugging errno:" . mysqli_connect_error() . PHP_EOL . "<br/>";
    exit;
    
}
mysqli_query('SET CHARACTER SET utf8md4');
$link->set_charset("utf8");
?>

