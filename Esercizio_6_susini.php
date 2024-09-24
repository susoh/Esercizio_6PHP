<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "<ul>";
        $n = 63;
        for ($i=1; $i<$n; $i++) {
            if ($n % $i == 0) {
                $str = $str . "<li>$i</li>";
            }
        }
        $str = $str . "</ul>";
        echo $str;
        
    ?>
</body>
</html>