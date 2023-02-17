<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="year" id="">
        <button>Click</button>
    </form>
    <?php
        echo  ($_POST['year']%400==0)||($_POST['year']%100==0)||($_POST['year']%4==0)==1? "Високосный" : "Невисокосный";
    ?>
</body>
</html>