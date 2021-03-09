<?php
include_once "auth.php"; //Подключаем БД


//считываем POST
$rcount = !empty($_POST['rcount']) ? $_POST['rcount'] : '0';

function out_bd_table($res) {
    // Условие делаем для проверки, есть ли вообще что то в этой таблице;
    if ($res -> num_rows > 0) {
        // Цикл будет работать пока не пройдёт все строки;
        // При каждой новой итерации цикла,
        // Он переходит на новое значение;
        while ($row = $res -> fetch_assoc()) {
            // Вывод на экран;
            echo "Код: {$row["id"]}; Наименование товара: {$row["title"]}; Цена: {$row["price"]}; Валюта: {$row["currency"]};
              <hr>";
        }
        // Если таблица пустая, будет выведено "Данных нет";
    } else {
        echo "Данных нет";
    }
}


// Тут создаём SQL запрос, выводить будем по 10;
$query = "SELECT * FROM `goods` LIMIT $rcount,10";
// Отправляем запрос;
$result = $mysqli -> query($query);

out_bd_table($result);
