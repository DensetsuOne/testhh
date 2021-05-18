<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1. SELECT * FROM a, b WHERE a.id=b.a_id;
       2. SELECT * FROM a JOIN b ON a.id=b.a_id;
       Между ними разница в том что во 2 случае используется join запрос на объединение 2 таблиц где a.id равен b.a_id тоесть если id а из таблицы а схож с id a из таблицы b
       то они обьединяют и выводят ту часть таблицы где они схожи, во втором случае происходит тоже самое но используется уже проверка.
       ОТВЕТ: Они функционально эквивалентны</p>
</body>
</html>