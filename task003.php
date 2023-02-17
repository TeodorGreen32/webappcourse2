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
        <input type="date" name="year" id="">
        <button>Click</button>
    </form>
    <?php
    if(isset($_POST['year'])){
        $weekday = date_format(date_create($_POST['year']),"l");
        switch($weekday){
            case "Monday":{
                echo "Понедельник";
                break;
            }
            case "Tuesday":{
                echo "Вторник";
                break;
            }
            case "Wednesday":{
                echo "Среда";
                break;
            }
            case "Thursday":{
                echo "Четверг";
                break;
            }
            case "Friday":{
                echo "Пятница";
                break;
            }
            case "Saturday":{
                echo "Суббота";
                break;
            }
            case "Sunday":{
                echo "Воскресенье";
                break;
            }
        }

    }
        
    ?>
</body>
</html>

