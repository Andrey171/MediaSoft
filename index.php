
<?php
    $arr=[
        'Желтый ' => ' 1',
        'Красный ' => ' 2',
        'Синий ' => ' 3',
        'Голубой ' => ' 4',
        'Оранжевый ' => ' 5',
        'Зеленый ' => ' 6',
        'Черный ' => ' 7',
        'Серый ' => ' 8',
        'Фиолетовый ' => ' 9 ',
        'Розовый' => ' 10',
    ];
    $ar1=[
        '1' => ' Енот',
        '2' => ' Гусь',
        '3' => ' Волк',
        '4' => ' Собака',
        '5' => ' Курица',
        '6' => ' Крыса',
        '7' => ' Лиса',
        '8' => ' Ёжик',
        '9' => ' Олень',
        '10' => ' Рысь',
    ];
    $ar2=[
        '1' => ' Ель',
        '2' => ' Кедр',
        '3' => ' Пихта',
        '4' => ' Береза',
        '5' => ' Липа',
        '6' => ' Осина',
        '7' => ' Тополь',
        '8' => ' Клен',
        '9' => ' Ольха',
        '10' => ' Черемуха',
    ];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            foreach ($arr as $key => $value){?>
                <div> <?php echo "{$key} =>{$value}".PHP_EOL; ?> </div>

            <?php } ?> <br>
    </div>

    <div>
        <?php foreach ($ar1 as $key => $value){?>
            <div> <?php echo "{$key} =>{$value}".PHP_EOL; ?> </div>

        <?php } ?> <br>
    </div>

    <div>
        <?php foreach ($ar2 as $key => $value){?>
            <div> <?php echo "{$key} =>{$value}".PHP_EOL; ?> </div>

        <?php } ?>
    </div>

</body>
</html>