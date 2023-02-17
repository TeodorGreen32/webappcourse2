<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <button>Click</button>
    </form>

    <?php
    //Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку нужно посчитать процентное содержание каждого символа в тексте.  
    $text = $_POST['text'];
    $strlen = strlen($text);
    $arr_char = array_count_values(str_split($text));
    foreach($arr_char as $key => $value){
        echo $key." ";
        $res = $value / $strlen;
        echo ($res * 100)."%<br>";
    }
    ?>
</body>
</html>