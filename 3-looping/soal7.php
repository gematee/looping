<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="angka">Masukan Angka</label>
        <input type="text" name="angka" id="angka"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])){
        $angka = $_POST['angka'];
        for ($baris=1;$baris<=$angka;$baris++){
        for($i=$baris;$i<=$angka;$i++){
        echo "x";
        }
        echo "<br>";
    }
    }
    ?>
</body>
</html>