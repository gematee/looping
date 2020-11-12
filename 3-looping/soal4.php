<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="tinggi">Tinggi Badan</label>
        <input type="text" name="tinggi" id="tinggi">
        <label for="cm">cm</label><br>
        <label for="berat">Berat Badan </label>
        <input type="text" name="berat" id="berat">
        <label for="kg">kg</label><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $tinggi = $_POST['tinggi'];
            $berat = $_POST['berat'];
            $tinggi = ($tinggi-100)*0.9;
            if (($tinggi>=$berat+2)||($tinggi<=$berat-2)){
                echo "Berat Badan Anda Tidak Ideal";
            } else {
                echo "Berat Badan Anda Ideal";
            }

        }
    ?>
</body>
</html>