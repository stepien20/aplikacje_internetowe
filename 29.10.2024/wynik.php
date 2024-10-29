<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['sub'])){
        $imie=$_POST['imie'];
        $szkola=$_POST['szkola'];
        $rola=$_POST['rola'];
        $pelnoletni='niepełnoletni';
        if(isset($_POST['dorosly'])){

            // $pelnoletni="nie" + $pelnoletni;
            $pelnoletni="pełnoletni";
        }
        echo"Witaj $imie,<br> Jesteś $rola w $szkola.<br> Z formularza wynika, że jesteś $pelnoletni";
    }
    
    ?>
</body>
</html>