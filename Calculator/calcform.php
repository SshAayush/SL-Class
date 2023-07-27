<?php
    @$value = $_GET['result'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="calcdb.php" method="POST">
            <input type="number" name="num1" placeholder="Enter number 1"><br>
            <input type="number" name="num2" placeholder="Enter number 2"><br>
            <input type="submit" value="+" name="cal">
            <input type="submit" value="-" name="cal">
            <br>
            <br>
            <label for="result">Result:</label>
            <input type="number" name="result" id="result" placeholder="<?php echo $value ?> "readonly>
        </form>
    </body>
</html>