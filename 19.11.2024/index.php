<!DOCTYPE html>
<html lang='pl'>
<head>
<meta charset="utf8">
<title>Hurtownia szkolna </title>
<link rel='stylesheet' href='styl.css'>
</head>
<body>
    <div class="container">
        <header>
            <h1>Hurtownia z najlepszymi cenami”</h1>
        </header>
        <main>
            <aside>
                <h2>Nasze ceny</h2>
               
                <table>
                    <?php 
                    $connect=mysqli_connect('localhost','root','','sklep');
                    if(!$connect){
                        echo "błąd zmuifgsfs";
                        exit;
                    }
                    $result=mysqli_query($connect,"SELECT nazwa,cena from towary limit 4;");
                    while($row=mysqli_fetch_row($result)){
                        echo"<tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                    </tr>";
                    }
                    ?>
                </table>
            </aside>
            <main>
                <h2>Koszt zakupów</h2>
                <form action="index.php" method='post'>
                    <label for="artykul">
                        wybierz artykuł:
                        <select name="artykul" id="artykul">
                                <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                                <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                                <option value="Cyrkiel">Cyrkiel</option>
                                <option value="Linijka 30 cm">Linijka 30 cm</option>
                        </select>
                    </label>
                    <label for="ile">liczba sztuk:<input type="number" name="ile" id="ile"></label>
                    <input type="submit" value="OBLICZ" name='oblicz'>
                </form>
                <p>
                    <?php 
                    
                    if(isset($_POST['oblicz'])){
                        $artykul=$_POST['artykul'];
                        $ile=doubleval($_POST['ile']);
                        $result=mysqli_query($connect,"Select cena from towary where nazwa='$artykul'");
                        $cena=doubleval(mysqli_fetch_row($result)[0]);
                        $wynik=$cena*$ile;
                        echo"Wartość zakupów: $wynik";
                    }
                    ?></p>
            </main>
            <section>
                <h2>Kontakt</h2>
                <img src="zakupy.png" alt="hurtownia">
                <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
                
            </section>
        </main>
        <footer>
                <h4>Witrynę wykonał 06734</h4>
        </footer>
    </div>
</body>
</html>
<?php 
mysqli_close($connect);
?>