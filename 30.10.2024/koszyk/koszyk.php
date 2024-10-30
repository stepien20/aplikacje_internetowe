<?php 
session_start();
if(isset($_GET['wyczysc'])){
    session_unset();
    header("Location: index.php");
}else
if(!isset($_SESSION['koszyk'])){
    session_unset();
    echo"brak produktów.<br> <a href='index.php'>Dodaj produkt</a>";
    
}else{


$koszyk=$_SESSION['koszyk'];
arsort($koszyk);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <div class="container">
        <main>
            <a href="?wyczysc=1">Wyczyść koszyk</a>
            <h5>Wybrane produkty:</h5>
            <ul>
                <?php foreach($koszyk as $produkt => $ilosc){
                    echo "<li>$produkt x $ilosc</li>";
                } ?>
            </ul>
            <a href="index.php">Dodaj produkt</a>
        </main>
    </div>
</body>
</html>
<?php }?>