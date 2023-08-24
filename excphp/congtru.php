<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = null;
    $b = null;
    $c = null;
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            if(isset($_GET['num1']))
                $a = $_GET['num1'];
            if(isset($_GET['num2']))
                $b = $_GET['num2'];
            $c = $a + $b; 

        }
    ?>
    <form action="" method="get">
    <div class ="container">
        <input name ="num1" type="text" placeholder="nhập số 1">
        <label for="">+</label> 
        <input name ="num2" type="text" placeholder="nhập số 2">
        <label for="">=</label>
        <input type="submit" value="<?php echo $c ?>">
    </div>
    </form>
</body>
</html>