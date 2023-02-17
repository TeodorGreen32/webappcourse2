<?php
$today = getdate()['mday'];
$arr = ['Новый год','День всех влюбленных','Рождество','День асфальта','Пасха','День победы','1 мая','День программиста','День знаний','День защитника отечества','Женский день'];

echo $arr[rut($today)];

function rut($today){
    if($today == 17){
        return 0;
    }
    else if($today == 18){
        return 1;
    }
    else if($today == 19){
        return 2;
    }
    else if($today == 20){
        return 3;
    }
    else if($today == 21){
        return 4;
    }
    else if($today == 22){
        return 5;
    }
    else if($today == 23){
        return 6;
    }
    else if($today == 24){
        return 7;
    }
    else if($today == 25){
        return 8;
    }
    else if($today == 26){
        return 9;
    }
    else{
        return false;
    }
    
}
?>