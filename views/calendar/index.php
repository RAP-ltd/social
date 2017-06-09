<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 09.06.2017
 * Time: 16:00
 */

$this->title = 'Calendar';

// Вычисляем число дней в текущем месяце

$dayofmonth = date('t');

// Счётчик для дней месяца

$day_count = 1;



// 1. Первая неделя

$num = 0;

for($i = 0; $i < 7; $i++)

{

    // Вычисляем номер дня недели для числа

    $dayofweek = date('w',

        mktime(0, 0, 0, date('m'), $day_count, date('Y')));

    // Приводим к числа к формату 1 - понедельник, ..., 6 - суббота

    $dayofweek = $dayofweek - 1;

    if($dayofweek == -1) $dayofweek = 6;



    if($dayofweek == $i)

    {

        // Если дни недели совпадают,

        // заполняем массив $week

        // числами месяца

        $week[$num][$i] = $day_count;

        $day_count++;

    }

    else

    {

        $week[$num][$i] = "";

    }

}



// 2. Последующие недели месяца

while(true)

{

    $num++;

    for($i = 0; $i < 7; $i++)

    {

        $week[$num][$i] = $day_count;

        $day_count++;

        // Если достигли конца месяца - выходим

        // из цикла

        if($day_count > $dayofmonth) break;

    }

    // Если достигли конца месяца - выходим

    // из цикла

    if($day_count > $dayofmonth) break;

}



// 3. Выводим содержимое массива $week

// в виде календаря

// Выводим таблицу

echo "<table border=1>
<tr>
<td>Пн</td>
<td>Вт</td>
<td>Ср</td>
<td>Чт</td>
<td>Пт</td>
<td style='color: red;'>Сб</td>
<td style='color: red;'>Вс</td>
</tr>";

for($i = 0; $i < count($week); $i++)

{

    echo "<tr>";

    for($j = 0; $j < 7; $j++)

    {

        if(!empty($week[$i][$j]))

        {

            // Если имеем дело с субботой и воскресенья

            // подсвечиваем их

            if($j == 5 || $j == 6)

                echo "<a href=''<td><font color=red>".$week[$i][$j]."</font></td>";

            else echo "<td>".$week[$i][$j]."</td>";

        }

        else echo "<td>&nbsp;</td>";

    }

    echo "</tr>";

}

echo "</table>";
