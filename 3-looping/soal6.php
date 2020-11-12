<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="jamker">Jam Kerja</label>
        <input type="text" name="jamker" id="jamker"><br>
        <label for="golongan">Golongan</label>
        <select name="golongan" id="golongan">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>    <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        if (isset($_POST['submit'])) {

            $jamker = $_POST['jamker'];
            $gol = $_POST['golongan'];
            if ($_POST['golongan'] == 'A') {
                $golongan=4000;
            } else if ($_POST['golongan'] == 'B') {
                $golongan=5000;
            } else if ($_POST['golongan'] == 'C') {
                $golongan=6000;
            } else if ($_POST['golongan'] == 'D') {
                $golongan=7000;
            }
        if ($jamker<=48) {
            $gaji = $jamker*$golongan;
            echo "Golongan anda adalah $gol<br>";
             echo "Gaji anda adalah $gaji";
        } 
        else {
            $jamlem = $jamker-48;
            $gajipokok = $jamker-$jamlem;
            $gaji = ($gajipokok*$golongan)+($jamlem*3000);
            echo "Golongan anda adalah $gol<br>";
            echo "Jam Lembur anda adalah $jamlem <br>";
            echo "Gaji anda adalah $gaji";
            }
        }
    ?>
</body>
</html>