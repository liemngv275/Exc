<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tigia = 25000;
    $vndCurrency = null;
    $usdCurrency = null;
    $result = null;
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_POST['vdn_currency'])){
            $vndCurrency = $_POST['vnd_currency'];
        }
        if(isset($_POST['usd_currency'])){
            $usdCurrency = $_POST['usd_currency'];
        }
        $result = $vndCurrency/$tigia;
    }
    ?>
    <form action="" method="get">
        <div>
            <input name="vnd_currency" type="text">
            <select name="" id="">
                <option value="">VNĐ</option>
                <option value="">USD</option>
            </select>
            <input name="usd_currency" type="text">
            <button type="submit">Chuyển đổi</button>
        </div>
        <label for="">Kết Quả: <?php echo $result ?></label>
    </form>
</body>
</html>