<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label {
            width: 120px;
            padding-left: 10px;
            float: left;
        }

        select {
            width: 180px
        }

    </style>
</head>
<body>
<h1>Simple Calculator</h1>
<label>Calculator</label><br>
<form method="post">
    <label>Frist operand :</label>
    <input type="text" name="firstNumber"><br>
    <label>Operator :</label>
    <select name="calculator">
        <option>add</option>
        <option>sub</option>
        <option>multi</option>
        <option>division</option>
    </select><br>
    <label>Second operand :</label>
    <input type="text" name="secondNumber"><br>
    <input type="submit" value="calculator">

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST["firstNumber"];
    $second = $_POST["secondNumber"];
    $cal = $_POST["calculator"];
    switch ($cal) {
        case 'add' :
            echo $result = $first + $second;
            break;
        case 'sub' :
            echo $result = $first - $second;
            break;
        case 'multi' :
            echo $result = $first * $second;
            break;
        case 'division' :
            if ($second == 0) {
                check();
            } else {
                echo $result = $first / $second;
            }
            break;
    }
}
function checkNumber($number)
{
    if ($number == 0) {
        throw new Exception("Gia tri so chia phai khac 0");
    } else {
        return true;
    }
}

function check()
{
    try {
        checkNumber(0);
        echo "Number phai khac 0";
    } catch (Exception $e) {
        echo "Message: " . $e->getMessage();
    }
}


?>
</body>
</html>