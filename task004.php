<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo getdate()['mday']." ";
        switch (getdate()['mon']){
            case 1:{
                echo "Января";
                break;
            }
            case 2:{
                echo "Февраля";
                break;
            }
            case 3:{
                echo "Марта";
                break;
            }
            case 4:{
                echo "Апреля";
                break;
            }
            case 5:{
            echo "Мая";
            break;
            }
            case 6:{
                echo "Июня";
                break;
            }
            case 7:{
                echo "Июля";
                break;
            }
            case 8:{
                echo "Августа";
                break;
            }
            case 9:{
                echo "Сентября";
                break;
            }
            case 10:{
                echo "Октября";
                break;
            }
            case 11:{
            echo "Ноября";
                break;
            }
            case 12:{
                echo "Декабря";
                break;
            }
        }
        echo " ".getdate()["year"]." Года"
    ?>
</body>
</html>