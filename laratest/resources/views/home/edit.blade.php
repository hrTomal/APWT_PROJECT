<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit  Product {{  $product['id'] }}</h1>
    <form method="post">
    @csrf
        <fieldset>
            <legend>Edit</legend>
            <table>
                <tr>
                    <td>Product Name:</td>
                    <td><input type="text" name="username" value=" {{ $product['ProductName']  }} "></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" value=" {{ $product['Price']  }}"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td>
                        <select name="productType" id="">
                            <option value="Notselected">--Not selected--</option>
                            <option value="Toys"  @if ($product['Type'] == "Toys") selected @endif>Toys</option>
                            <option value="Shirt" @if($product['Type'] == "Shirt") selected @endif>Shirt</option>
                            <option value="Shoe"  @if ($product['Type'] == "Shoe") selected @endif>Shoe</option>
                            <option value="Pant"  @if ($product['Type'] == "Pant") selected @endif>Pant</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><input type="text" name="status" value="{{ $product['Status']    }}"></td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td><input type="text" name="quantity" value="{{ $product['Quantity']    }}"></td>
                </tr>
                <tr>
                    <td>Review:</td>
                    <td><input type="text" name="review" value="{{ $product['Review']    }}"></td>
                </tr>
                <tr>
                    <td>Offer:</td>
                    <td><input type="text" name="offer" value="{{ $product['Offer']    }}"></td>
                </tr>
                <tr>
                    <td>Seller Id:</td>
                    <td><input type="text" name="sId" value="{{ $product['SellerId']    }}"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>