<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Новости дня</title>
    <link rel="stylesheet" href = "style.css">
</head>

<body>

    <header>
        
    </header>

    <?php 
        $symA = 0;
        $symB = 0;
     
        $arrayCompare = [
            true,
            false,
            1,
            0,
            -1,
            "1",
            null,
            "php"];

        for ($i = 0; $i < 8; $i++)
        {
            for ($j = 0; $j < 8; $j++)
            {
                $arrayResult[$i][$j] = ($arrayCompare[$i] == $arrayCompare[$j]);
                $arrayResultStrong[$i][$j] = ($arrayCompare[$i] === $arrayCompare[$j]);
            }
        }

        function boolToStr(bool $value) {
            return ($value) ? '1' : '0';
        }

        function boolToStr2(bool $value) {
             return ($value) ? 'true' : 'false';
        }

        function boolToStr3($value) {
            if (gettype($value) == "boolean" && $value == true)
                return 'true';
            else if (gettype($value) == "boolean" && $value == false)
                return 'false';
            else if (gettype($value) == "NULL")
                return 'null';    
            else if (gettype($value) == "string")
                return '"'.$value.'"';            
            else             
               return $value;
        }


    ?>

    <main>
        <div>
            <h1>Таблица истинности PHP</h1>
            <table cols = "6" >
                <!-- первая строка заголовок-->
                <tr>
                <td class = "tr_header">A</td>
                <td class = "tr_header">B</td>
                <td class = "tr_header">!A</td>
                <td class = "tr_header">A || B</td>
                <td class = "tr_header">A && B</td>
                <td class = "tr_header">A xor B</td>
                </tr>
                <!-- вторая строка -->
                <tr>
                    <td><?php echo $symA?></td>
                    <td><?php echo $symB?></td>
                    <td><?php echo !$symA?></td>
                    <td><?php echo boolToStr($symA || $symB)?></td>
                    <td><?php echo boolToStr($symA && $symB)?></td>
                    <td><?php echo boolToStr($symA xor $symB)?></td>
                </tr>
                <!-- третья строка -->
                <tr>
                    <td><?php echo $symA?></td>
                    <td><?php echo !$symB?></td>
                    <td><?php echo !$symA?></td>
                    <td><?php echo boolToStr($symA || !$symB)?></td>
                    <td><?php echo boolToStr($symA && !$symB)?></td>
                    <td><?php echo boolToStr($symA xor !$symB)?></td>
                </tr>
                <!-- четвертая строка -->
                <tr>
                    <td><?php echo !$symA?></td>
                    <td><?php echo $symB?></td>
                    <td><?php echo $symA?></td>
                    <td><?php echo boolToStr(!$symA || $symB)?></td>
                    <td><?php echo boolToStr(!$symA && $symB)?></td>
                    <td><?php echo boolToStr(!$symA xor $symB)?></td>
                </tr>
                <!-- пятая строка -->
                <tr>
                    <td><?php echo !$symA?></td>
                    <td><?php echo !$symB?></td>
                    <td><?php echo $symA?></td>
                    <td><?php echo boolToStr(!$symA || !$symB)?></td>
                    <td><?php echo boolToStr(!$symA && !$symB)?></td>
                    <td><?php echo boolToStr(!$symA xor !$symB)?></td>
                </tr>
            </table>
        </div>

        <h1>Таблицы сравнения</h1>

        <div>
            <table cols = "8" >
            <caption><b>Гибкое сравнение ==</b></caption>
                <!-- первая строка заголовок-->
                <tr>
                    <td class = "tr_header_strong"> </td>   
                    <?php 
                        foreach($arrayCompare as $i){
                        echo "<td class = \"tr_header_strong\">".boolToStr3($i)."</td>";
                        }
                    ?>
                </tr>
                <?php 
                        $i = 0;
                        foreach ($arrayResult as $key => $item){
                            echo "<tr>";   
                            if (i==0 )
                            echo "<td class = \"tr_header_strong\">".boolToStr3($arrayCompare[$i])."</td>";
                            $i++;
                            foreach ($item as $sub_item){
                            echo "<td class = \"td_not_strong\">".boolToStr2($sub_item)."</td>";                           
                            }
                            echo "</tr>";                           
                       }
                ?>
            </table>
        </div>

        <div>           
            <table cols = "8" >
            <caption><b>Жесткое сравнение ===</b></caption>
                <!-- первая строка заголовок-->
                <tr>
                    <td class = "tr_header_strong"> </td>   
                    <?php 
                        foreach($arrayCompare as $i){
                        echo "<td class = \"tr_header_strong\">".boolToStr3($i)."</td>";
                        }
                    ?>
                </tr>
                <?php 
                        $i = 0;
                        foreach ($arrayResultStrong as $key => $item){
                            echo "<tr>";   
                            if (i==0 )
                            echo "<td class = \"tr_header_strong\">".boolToStr3($arrayCompare[$i])."</td>";
                            $i++;
                            foreach ($item as $sub_item){
                            echo "<td class = \"td_strong\">".boolToStr2($sub_item)."</td>";                           
                            }
                            echo "</tr>";                           
                       }
                ?>
            </table>
        </div>

        <h1>Результаты сравнения</h1>
        <div>           
            <table cols = "8" >
            <caption><b>Жесткое сравнение ===</b></caption>
                <!-- первая строка заголовок-->
                <tr>
                    <td class = "tr_header_strong"> </td>   
                    <?php 
                        foreach($arrayCompare as $i){
                        echo "<td class = \"tr_header_strong\">".boolToStr3($i)."</td>";
                        }
                    ?>
                </tr>
                <?php 
                        $i = 0;
                        foreach ($arrayResultStrong as $key => $item){
                            echo "<tr>";   
                            if (i==0 )
                            echo "<td class = \"tr_header_strong\">".boolToStr3($arrayCompare[$i])."</td>";
                            $i++;
                            foreach ($item as $sub_item){
                            echo "<td class = \"td_strong\">".boolToStr2($sub_item)."</td>";                           
                            }
                            echo "</tr>";                           
                       }
                ?>
            </table>
        </div>


    </main>

    <footer>
    </footer>

</body>

</html>