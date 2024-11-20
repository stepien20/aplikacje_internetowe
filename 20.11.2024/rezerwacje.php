<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf8">
    <title>KINO „Za rogiem”</title>
    <link rel='stylesheet' href='style.css'>

    </head>
    <body>
        <main>
            <header>
                    <img src="baner.jpg" alt="baner">
            </header>
            <aside>
                <ul>
                    <li><a href="index.html">Strona główna</a></li>
                </ul>
                <hr>    
                <form action="rezerwacje.php">
                    <input type="date" name="data" value='2022-08-08'>
                    <input type="time" name="czas" value='15:00'>
                    <input type="submit" name="sub" value="Pokaż">
                </form>
            </aside>
            <section>
                <table>
               <?php   
               if(isset($_GET['data'])&&isset($_GET['czas'])&&isset($_GET['sub'])){
                $connection=mysqli_connect('localhost','root','','kino');
               if($_GET['data']!=''&&$_GET['czas']!=''){
                $tab=array();
                $data=$_GET['data'];
                $czas=$_GET['czas'];
                $query="SELECT miejsce,rzad from rezerwacje where rezerwacje.Data='$data' and rezerwacje.Godzina='$czas';";
                $result=mysqli_query($connection,$query);
                while($row=mysqli_fetch_row($result)){
                    $miejsce=$row[0];
                    $rzad=$row[1];
                    $tab[$rzad][$miejsce]=1;
                }
                for($i=1;$i<=15;$i++){
                    echo"<tr>";
                    echo"<th>$i</th>";
                    for($j=1;$j<=20;$j++){
                       
                        if(isset($tab[$i][$j])){
                            echo"<td class='zajete'>$j</td>";
                            
                        }else{
                            echo"<td class='wolne'>$j</td>";

                        }
                    }
                    echo"</tr>";
                }

               }else{
                    echo"Podaj poprawną datę i godzinę;
seansu";
               }
               mysqli_close($connection);
               }else{
                echo "Podaj poprawną datę i godzinę";
                exit;
               }
               
               ?>
               </table>
            </section>
            <footer>
                <h5>Egzamin INF.03 - AUTOR: ja</h5>
            </footer>
        </main>
    </body>
</html>