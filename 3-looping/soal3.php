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
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $jamker = $_POST['jamker'];
            if ($jamker<=48) {
                $gaji = $jamker*2000;
                echo "Gaji anda adalah $gaji";
            } 
            else {
                    $jamlem = $jamker-48;
                    $gajipokok = $jamker-$jamlem;
                    $gaji = ($gajipokok*2000)+($jamlem*3000);
                    echo "Jam Lembur anda adalah $jamlem <br>";
                    echo "Gaji anda adalah $gaji";
                }
            }
    ?>
</body>
</html>