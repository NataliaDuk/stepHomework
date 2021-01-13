<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ведомость зарплат</title>
    <style>
        table {
            border: 3px grey outset;
            border-collapse: collapse;
            width: 500px;
            position: absolute;
            left: calc(50% - 250px);
        }

        th,
        tfoot {
            background: #E0FFFF;
        }

        th,
        tr,
        td {
            border: 1px black solid;
            padding: 6px 10px;
        }
    </style>
</head>

<body>

    <table>
        <caption>
            <h2>Ведомость зарплат<h2>
        </caption>
        <tr>
            <th>№</th>
            <th>Фамилия</th>
            <th>Зарплата, б.p.</th>
        </tr>

        <?php

        $list = [
            ["1.", 'Бедров С.А.', 1329],
            ["2.", 'Петров Н.П.', 1423],
            ["3.", 'Сидоров О.А.', 1732],
            ["4.", 'Ушаков С.А.', 1654],
            ["5.", 'Ларченко Н.П.', 1843],
            ["6.", 'Звонов О.А.', 1345],
            ["7.", 'Иванов С.А.', 1416],
            ["8.", 'Водовозов Н.П.', 1634],
            ["9.", 'Пороховой О.А.', 1121],
            ["10.", 'Лазуренко С.А.', 1731]
        ];

        foreach ($list as $value1) {
            echo "<tr>";
            foreach ($value1 as $value2) {
                echo "<td>$value2</td>";
            }
            echo "</tr>";
        }

        function sum($array)
        {
            $result = 0;
            for ($i = 0; $i < count($array); $i++) {
                $result += $array[$i][2];
            }
            return $result;
        }
        $sum = sum($list);

        ?>

        <tfoot>
            <tr>
                <td colspan="2" style="text-align:right"><b>ИТОГО:</b></td>
                <td><b><?php echo $sum ?></b></td>
            </tr>
        </tfoot>

    </table>

</body>

</html>