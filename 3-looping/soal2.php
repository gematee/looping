<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="taun">Tahun</label>
        <input type="text" name="taun" id="taun"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if (isset($_POST['submit'])) {
            if($_POST['taun']%4==0) {
                echo "Tahun $_POST[taun] adalah tahun kabisat";
            }
            else {
                echo "Tahun $_POST[taun] adalah bukan tahun kabisat";
            }
        }
    ?>
</body>
</html>