<?php 

$connect=mysqli_connect("localhost","root","","sklep");
$query="SELECT towary.nazwa, towary.cena FROM `towary` WHERE 1 limit 4;";
$result=mysqli_query($connect,$query);
$row;
$tab1=[];
$tab2=[];
while($row=mysqli_fetch_array($result)){
    array_push($tab1,$row["nazwa"]);
    array_push($tab2,$row["cena"]);
}






?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>
                Hurtownia z najlepszymi cenami
            </h1>
        </header>
        <main>
            <section id="lewy">
                <h2>
                    Nasze ceny
                </h2>
                <?php echo "
                <table>
                    <tr>
                        <td>$tab1[0]</td>
                        <td>$tab2[0]</td>
                    </tr>
                    <tr>
                        <td>$tab1[1]</td>
                        <td>$tab2[1]</td>
                    </tr>
                    <tr>
                        <td>$tab1[2]</td>
                        <td>$tab2[2]</td>
                    </tr>
                    <tr>
                        <td>$tab1[3]</td>
                        <td>$tab2[3]</td>
                    </tr>
                </table>
                "; ?>
            </section>
            <article id="srodkowy">
                <h2>Koszt zakupów</h2>
                <form action="index.php" method=post>
                    <p>wybierz artykuł</p>
                    <select name="artykul" id="artykul">
                        <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                        <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                        <option value="Cyrkiel">Cyrkiel</option>
                        <option value="Linijka 30 cm">Linijka 30 cm</option>
                    </select>
                    <label for="ilosc"><input type="number" id="ilosc"name="ilosc"  value="1"></label>
                        <input type="submit" value="OBLICZ" name="submit">
                        <p id="wynik">
                            <?php 
                                
                                if(isset($_POST["submit"])){
                                   $select=$_POST["artykul"];
                                   $ilosc=doubleval($_POST["ilosc"]);
                                   $query2="SELECT towary.cena FROM `towary` WHERE towary.nazwa='$select' ;";
                                   $result2=mysqli_query($connect,$query2);
                                   if(is_null($result2)){

                                   }else{

                                   $row =mysqli_fetch_row($result2);
                                   $cena=doubleval($row[0]);
                                   $koszt=$cena*$ilosc;
                                }
                                }
                                echo"wartość zakupów $koszt";
                            
                            ?>
                        </p>
                </form> 

            </article>
            <aside id="prawy">
                <h2>Kontakt</h2>
                <img src="zakupy.png" alt="hurtownia">
                <p>E-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
            </aside>
        </main>
        <footer>
            <h4>Witryne wykonal 213764209</h4>
        </footer>
    </div>
</body>
</html>
<?php  

mysqli_close($connect);
?>