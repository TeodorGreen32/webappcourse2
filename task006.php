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
        <input type="date" name="in">
        <button>Send</button>
    </form>


    <?php
        $indata = $_POST['in'];
        
        $indate = strtotiMe($indata);
        $iM = idate('m',$indate);
        $iD = idate('d',$indate);
        
        if(($iM == 3  && $iD >= 21) || ($iM == 4  && $iD <= 20)){
            echo "Овен";
        }
        else if(($iM == 4 && $iD >= 21) || ($iM == 5  && $iD <= 20)){
            echo "Телец";
        }
        else if(($iM == 5 && $iD >= 22) || ($iM == 6 && $iD <= 21)){
            echo "Близнецы";
        }
        else if(($iM == 6 && $iD >= 22) || ($iM == 7 && $iD <= 21)){
            echo "Рак";
        }
        else if(($iM == 7 && $iD >= 23) || ($iM == 8 && $iD <= 23)){
            echo "Лев";
        }
        else if(($iM == 8 && $iD >= 24) || ($iM == 9 && $iD <= 22)){
            echo "Дева";
        }
        else if(($iM == 9 && $iD >= 23) || ($iM == 10 && $iD <= 22)){
            echo "Весы";
        }
        else if(($iM == 10 && $iD >= 23) || ($iM == 11 && $iD <= 22)){
            echo "Скорпион";
        }
        else if(($iM == 11 && $iD >= 22) || ($iM == 12 && $iD <= 21)){
            echo "Стрелец";
        }
        else if(($iM == 12 && $iD >= 22) || ($iM == 1 && $iD <= 20)){
            echo "Козерог";
        }
        else if(($iM == 1 && $iD >= 21) || ($iM == 2 && $iD <= 19)){
            echo "Водолей";
        }
        else if(($iM == 2 && $iD >= 20) || ($iM == 3 && $iD <= 20)){
            echo "Рыбы";
        }
        else{
            echo "Error";
        }


    ?>
</body>
</html>