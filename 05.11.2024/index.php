  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            /* position: relative; */
        display: flex;
        flex-direction: column;
        align-items: center;
    }
        table{
        /* position: absolute;
        left: 37.5%; */

    }
    </style>
</head>
<body>
    
    <?php 
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

echo"<table>";
$query="SELECT * FROM KLIENCI";
$result=mysqli_query($conn,$query);
$r=mysqli_fetch_assoc($result);
echo "<tr>";
foreach($r as $key=>$value){
    echo "<th>$key</th> ";
}
echo "</tr>";
echo "<tr>";
foreach($r as $key=>$value){
    echo "<td>$value</td> ";
}
echo "</tr>";

while($r=mysqli_fetch_assoc($result)){
    echo"<tr>";
    foreach($r as $key=>$value){
        echo "<td>$value</td> ";
                }
                echo"</tr>";
                
            }
            echo"</table>";
            
            mysqli_close($conn);
            
            ?>
            </body>
            </html>
