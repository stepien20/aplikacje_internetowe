<?php 
$host='localhost';
$user='root';
$password='';
$dbname='biblioteka';
$connection=mysqli_connect($host,$user,$password,$dbname);
if(!$connection){
    echo "błąd z połączeniem z bazą danych";
    exit;
}
$query1='SELECT autorzy.imie,autorzy.nazwisko from autorzy order by autorzy.nazwisko asc';
$result1=mysqli_query($connection,$query1);
$autorzy=array();
while($r=mysqli_fetch_assoc($result1)){
    array_push($autorzy,$r);
}
$queryStatus=0;
if(isset($_POST['submit'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $kod=$_POST['kod'];
$query2="INSERT INTO CZYTELNICY(imie,nazwisko,kod) values('$imie','$nazwisko','$kod')";
$result2=mysqli_query($connection,$query2);
if(!$result2){
    echo"blad z dodaniem czytelnika";
    exit;
}else{
    $queryStatus=1;
}
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method='post'>
        imie<input type="text" name='imie'>
        nawisko<input type="text" name='nazwisko'>
        symbol<input type="number" name='kod'>
        <input type="submit" value='poszlo' name='submit'>
    </form>
</body>
</html>
<?php 
mysqli_close($connection);
?>