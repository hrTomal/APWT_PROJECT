<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create New  Product</h1>
    <form method="post">
        @csrf
        <fieldset>
            <legend>Insert Product</legend>
            <table>
                <tr>   
                    <td>Product Id:</td>
                    <td><input type="int" name="productId"></td>
                </tr>
                <tr>
                    <td>Product Name:</td>
                    <td><input type="text" name="ProductName"></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><input type="text" name="price"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td>
                        <select name="productType" id="product_type">
                        <option value="Notselected">---Not selected---</option>
                            <option value="Shirt">Shirt</option>
                            <option value="Pant">Pant</option>
                            <option value="Shoe">Shoe</option>
                            <option value="Toy">Toy</option>
                            <option value="Electrical">Electrical Materials</option>
                            <option value="Phone">Phone</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>status:</td>
                    <td><input type="text" name="status"></td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td><input type="text" name="quantity"></td>
                </tr>
                <tr>
                    <td>Review:</td>
                    <td><input type="text" name="review"></td>
                </tr>
                <tr>
                    <td>Offer:</td>
                    <td><input type="text" name="offer"></td>
                </tr>
                <tr>
                    <td>Seller Id:</td>
                    <td><input type="text" name="sId"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Insert"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>