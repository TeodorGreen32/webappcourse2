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
        <textarea name="input" id="input" cols="30" rows="10"></textarea>
        <button>click</button>
    </form>
    <?php
        $text = $_POST['input'];
        if($text){
            echo count(str_split($text))." симв.<br>";
            echo (count(preg_split('/\S/',$text))-1)." симв. без пробела<br>";
            echo count(preg_split('/\s/',$text))." сл.";
            
        }
        
        
    ?>
</body>
</html>