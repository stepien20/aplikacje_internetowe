<?php 
$host='localhost';
$user='root';
$password='';
$dbname='podroze';
$connection=mysqli_connect($host,$user,$password,$dbname);
if(!$connection){
    echo "błąd z połączeniem z bazą danych";
    exit;
}
$query1='SELECT nazwaPliku ,podpis  from zdjecia order by podpis asc';
$result1=mysqli_query($connection,$query1);
$table=array();
while($r=mysqli_fetch_assoc($result1)){

    array_push($table,[$r['nazwaPliku'],$r['podpis']]);
}
$query2='SELECT cel,dataWyjazdu FROM WYCIECZKI where dostepna=0';
$result2=mysqli_query($connection,$query2);

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    foreach ($table as $array) {
        echo "<img src='$array[0]' title='$array[1]' alt='$array[1]'>";
    }
    echo"<ol>";
    while($re=mysqli_fetch_assoc($result2)){
        $data=$re['dataWyjazdu'];
        $cel=$re['cel'];
        echo "<li>
        Dnia $data pojechalismy do $cel
        </li>";
    }
    echo"</ol>";
    ?>
</body>
</html>
<?php 
mysqli_close($connection);
?>