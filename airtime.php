<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php        
        function generatePin($length)
        {
            $result="";
            for($i=0;$i<$length;$i++)
            {
                $result .= rand(0,9);
            }
            return $result;
        }
        echo "S/N ------ PIN<br>";
        for ($j=0; $j<200; $j++)
        {
            echo ($j+1)."----".(generatePin(12))."<br>";
        }
    ?>
</body>
</html>