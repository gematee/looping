<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="usia">Usia Anda</label>
        <input type="text" name="usia" id="usia">
        <label for="tahun">tahun</label> <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $usia = $_POST['usia'];
            if ($usia<=5) {
                $status = "Bayi";
            } elseif ($usia<=16) {
                $status = "Anak-anak";
            } elseif ($usia<=50) {
                $status = "Dewasa";
            } elseif ($usia >=50) {
                $status = "Tua";
            }
            echo "Usia anda adalah $usia<br>";
            echo "Status anda adalah $status";
        }
    ?>
</body>
</html>