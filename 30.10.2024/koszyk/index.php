<?php 
session_start();
if(isset($_POST['sub'])){
    $_SESSION['ses']='kosz';
    $produkt=$_POST['produkt'];
    if(isset($_SESSION['koszyk'])){
        $koszyk=$_SESSION['koszyk'];
        // echo"koszyk";
        if(isset($koszyk[$produkt])){
            $koszyk[$produkt]+=1;
            // echo"istnieje juz";
        }else{
            $koszyk[$produkt]=1;
            
        }
    }else{
        // echo"koszk nowy";
        $_SESSION['koszyk']=array();
        $koszyk[$produkt]=1;
        
    }
    echo "dodano $produkt";
    $_SESSION['koszyk']=$koszyk;

    // var_dump($_SESSION);
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
    <div class="container">
        <form action="index.php" method="post">
            <select name="produkt" id="produkt">
                <option value="jabłko">jabłko</option>
                <option value="banan">banan</option>
                <option value="gruszka">gruszka</option>
                <option value="mango">mango</option>
                <option value="kiwi">kiwi</option>
            </select>
            
            <input type="submit" name="sub" value="Dodaj produkt do koszyka">
        </form>
        <a href="koszyk.php">Zobacz koszyk</a>
    </div>
</body>
</html>
