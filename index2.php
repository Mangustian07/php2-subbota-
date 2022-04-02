<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-zadanie</title>
</head>

<body>
    <h1>Введите дату от 1 до 31</h1>
    <form method="POST">
    <input type="number" name="Day">
    <input type="submit" value="Применить">

</form>
    <?php
    $day=$_POST["Day"];
    $nonResult = "Введите число от 1 до 31";
    if($day>=1 and $day<=31){
        if($day>=1 and $day<=10){
            echo "Первая декада";
        }
        else if($day>=11 and $day<=20){
            echo "Вторая декада";
        }
        else if($day>=21 and $day<=31){
            echo "Третья декада";
        }
    }
    else{
        echo $nonResult;
    }
    ?>
</body>

</html>