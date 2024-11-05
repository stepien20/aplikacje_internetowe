    <?php 
if(isset($_POST['sub'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $miejscowosc=$_POST['miejscowosc'];
    $host='localhost';
    $user='root';
    $pass='';
    $baza='klienci';
    $conn;
    try{    
        $conn=mysqli_connect($host,$user,$pass,$baza);
        
    }catch(Exception $e){
        echo $e->getMessage();
        $conn=0;
        exit();
    }
    $query="INSERT INTO klienci(imie, nazwisko, miejscowosc) VALUES ('$imie', '$nazwisko', '$miejscowosc'); ";
    mysqli_query($conn,$query);

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
    <h1>Rejestracja Klienta:</h1>
    <a href="index.php">Zobacz</a>
    <form action="klient.php" method="post">
    <label>Imię<input type="text" name="imie"></label>
    <label>Nazwisko:<input type="text" name="nazwisko"></label>
    <label>Miejscowość:<input type="text" name="miejscowosc"></label>
    <input type="submit" name='sub'>
    <input type="reset">

    </form>    
</body>
</html>
