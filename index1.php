<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-zadanie</title>
</head>

<body>
    <form method="POST">
        <input type="number" name="A">
        <input type="number" name="B">
        <input type="submit">
    </form>
    <?php
        $a=$_POST["A"];
        $b=$_POST["B"];
        if(($a<=1) and ($b>=3))
        {
            $c=$a+$b;
            echo 'Результат: ',$c;
        }
        else if($a=="" or $b==""){
            echo "Введите числа!";
        }
        else
        {
            $c=$a-$b;
            echo 'Результат: ',$c;
        }

    ?>
</body>

</html>