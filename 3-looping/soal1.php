<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    <label for="inves">Investasi</label>
    <input type="text" name="inves" id="inves"><br>
    <label for="periode">Periode</label>
    <input type="text" name="periode" id="periode"><br>
    <input type="submit" value="submit" name="submit">
</form>
    <?php
        if(isset($_POST['submit'])) {
            echo "<table border='1'>
            <tr><th>Tahun</th><th>Jumlah Uang</th></tr>";
            $inves = $_POST['inves'];
            $periode = $_POST['periode'];
            $bunga = 0.05;
            for ($i =1;$i<=$periode;$i++){
                $uang = $inves*(1+$bunga)**$i;
                echo "<tr><td>$i</td><td>".round($uang,2)."</td></tr>";
            }

            echo "</table>";
        }
    ?>
</body>
</html>