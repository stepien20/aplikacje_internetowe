<?php 
if(isset($_POST)){
    foreach($_POST as $index=>$value){
        if(is_array($value)){
            foreach($value as $key=>$val){
                echo $index."=>".$val."<br>";
            }
        }else{
        echo $index."=>".$value."<br>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formukarz tego typu benc</title>
    <style>
        label{
            display: block;
            margin: 1rem 0px;
        }
        textarea{
            display: block;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        
        <label>Imię: <input id="imie" type="text" name="imie"></label>
        <label>Wiek:<input id="nazwisko" type="number" name="nazwisko"></label>
        <p>Płeć:</p>
        <label><input id="m" type="radio" name="plec" value="m">Mężczyzna</label>
        <label><input id="k" type="radio" name="plec" value="k">Kobieta</label>
        <p>Ulubiony kolor:</p>
        <label>
            <select name="kolor" id="kolor">
                <option value="czerwony">czerwony</option>
                <option value="zielony">zielony</option>
                <option value="niebieski">niebieski</option>
            </select>
        </label>
        <p>Ulubiona seria gier:</p>
        <label><input id="GTA" type="checkbox" name="gra[]" value="GTA">GTA</label>
        <label><input id="FIFA" type="checkbox" name="gra[]"    value="FIFA">FIFA</label>
        <label><input id="Battlefield" type="checkbox" name="gra[]" value="Battlefield">Battlefield</label>
        <label><input id="Settlers" type="checkbox" name="gra[]"    value="Settlers">Settlers</label>
        <label><input id="Call of duty" type="checkbox" name="gra[]"    value="Call of duty">Call of duty</label>
        <label><input id="Need For Seed" type="checkbox" name="gra[]"   value="Need For Seed">Need For Seed</label>
        <label><input id="Tony Hawk's" type="checkbox" name="gra[]" value="Tony Hawk's">Tony Hawk's</label>
        <textarea name="poleTekstowe" id="poleTekstowe" cols="30" rows="8"></textarea>
        <input id="submit" type="submit" value="Prześlij">

    </form>
</body>
</html>