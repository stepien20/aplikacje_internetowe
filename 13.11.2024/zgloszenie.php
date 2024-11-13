<?php 
$host='localhost';
$user='root';
$password='';
$dbname='wedkarstwo';
$connection=mysqli_connect($host,$user,$password,$dbname);
if(!$connection){
    echo"błąd z połączeniem z bazą danych";
}
if(isset($_POST['submit'])){
    $data=$_POST['data'];
    $sedzia=$_POST['sedzia'];
    $lowisko=$_POST['lowisko'];
    $query="insert into zawody_wedkarskie(Karty_wedkarskie_id ,Lowisko_id,data_zawodow,sedzia ) VALUES(0,$lowisko,'$data','$sedzia');";
    mysqli_query($connection,$query);
}
mysqli_close($connection);
?>