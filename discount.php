<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $describe = $_POST["describe"];
    $price = $_POST["price"];
    $discount = $_POST["discount"]/100;
    $discount_amount = $price* $discount*0.1;
}
?>
<form id="form">
    <table>
        <tr>
            <td>Product Description :       </td>
            <td><?php echo $describe ?></td>
        </tr>
        <tr>
            <td>Price :     </td>
            <td><?php echo "$".$price ?></td>
        </tr>
        <tr>
            <td>Discount Percent :      </td>
            <td><?php echo $discount."%" ?></td>
        </tr>
        <tr>
            <td>Discount Amount :       </td>
            <td><?php echo $discount_amount."%" ?></td>
        </tr>
        <tr>
            <td>Discount Price :        </td>
            <td><?php echo $describe - $discount_amount ?></td>
        </tr>
    </table>
</form>

</body>
</html>
