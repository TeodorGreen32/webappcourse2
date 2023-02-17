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
        $inputDate = $_POST['year'];
       
        $inDate = strtotime($inputDate);
        $inYear = idate('Y',$inDate);
        $inMon = idate('m',$inDate);
        $inDat = idate('d',$inDate);
        // echo $inYear." ".$inMon." ".$inDat."<br>";
        $nowYear = (getdate()['year']);
        $nowMon = (getdate()['mon']);
        $nowDay = (getdate()['mday']);
        // echo $nowYear." ".$nowMon." ".$nowDay;

        if($nowYear < $inYear){
            echo "false value";
        }
        else{
            $out = $nowYear - $inYear;
            if($inMon > $nowMon){
                $out-1;
                echo $out;
            }
            else if($inDat > $nowDay){
                $out-1;
                echo $out;
            }
            else{
                echo $out;
            }

            
            
        }
        
    ?>
</body>
</html>