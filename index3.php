<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-zadanie</title>
</head>

<body>
    <?php
        $arr = array(
        "a" => 2,
        "b" => 5,
        "c" => 3,
        "d" => 9,
        );
        $result1 = $arr["a"]*$arr["b"];
        $result2 = $arr["c"]*$arr["d"];
        echo "Результат умножения первого и второго элемента: ", $result1, "</br>";
        echo "Результат умножения третьего и четвертого элемента: ", $result2, "</br>";
        echo "Значение суммы двух результатов: ",$result1+$result2, "</br>"; //result
    ?>
</body>

</html>