<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="utf-8">
        <title>Laboratory4</title>
</head>
<body>
  <h1 style = "text-align: center;">Лабораторная №4. Вариант №8</h1>
<?php
    # Путь к файлу
    $file_name = "data.txt";
        # Считываем информацию по строкам
    $data = file( $file_name );
?>
<table border="1">
<tr style = "background: red">
        <td>Автор</td>
        <td>Название</td>
        <td>Страницы</td>
</tr>
<?php
    # В цикле обходим массив данных
     foreach( $data as $value ):
    
        # Разбиваем строку по |
        $value = explode( "|", $value );
?>
    <tr style = "background: yellow">
        <td><?=$value[0]?></td>
        <td><?=$value[1]?></td>
        <td><?=$value[2]?></td>
    </tr>
<?php
    endforeach;
?>
</table>
</body>
</html>