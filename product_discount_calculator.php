<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    #div{
        border: 2px solid black;
        width: 550px;
        padding: 0px 20px 20px;
        margin: 0 auto;

    }
    input {
        width: 300px;
        font-size: 16px;
        border: 2px solid green;
        border-radius: 30px;
        padding: 12px 10px 12px 10px;
    }
    button {
        border-radius: 30px;
    }
</style>
<body>
    <form action="discount.php" method="post">
        <div id="div">
            <h2>Product Discount Calculator</h2>
            <table>
                <tr>
                    <td><h4>Product Description: </h4></td>
                    <td><input type="text" name="describe" placeholder="Mô tả của sản phẩm..."></td>
                </tr>
                <tr>
                    <td><h4>List Price: </h4></td>
                    <td><input type="text" name="price" placeholder="Giá niêm yết của sản phẩm..."></td>
                <tr>
                    <td><h4>Discount Percent: </h4></td>
                    <td><input type="text" name="discount" placeholder="Tỷ lệ chiết khấu...">(%)</td>
                </tr>
                <tr>
                    <td></td>
                    <td><button>Calculate Discount</button></td>
                </tr>
            </table>
        </div>
    </form>

</body>
</html>
