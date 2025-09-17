<?php
$conn = new mysqli("localhost", "root", "", "product_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';

    $sql = "INSERT INTO products (name, buying_price, selling_price, display) 
            VALUES ('$name', '$buying_price', '$selling_price', '$display')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        body {
            width: 20%;
            margin: 15px auto;
        }
    </style>
</head>
<body>
    <fieldset>
     <legend>ADD PRODUCT</legend>
    <form method="POST" >
        <label>Name</label><br>
        <input type="text" name="name" required> <br>

        <label>Buying Price</label><br>
        <input type="number" name="buying_price" required> <br>

        <label>Selling Price</label><br>
        <input type="number" name="selling_price" required> <br>
<hr>
        <input type="checkbox" name="display" value="Yes">
        <label>Display</label> <br>
        <hr>
        <input type="submit" value="SAVE">
    </form>
    </fieldset>

    <br>
    <br>
    <br>

    <?php
    $_POST['display']=true;
    if (isset($_POST['display'])) {
        $sql = "SELECT id, name, (selling_price - buying_price) AS profit 
                FROM products WHERE display = 'Yes'";
        $result = $conn->query($sql);

        echo "<h2>DISPLAY</h2>";
        echo "<table border='1'>
        <tr><th>NAME</th><th>PROFIT</th><th>ACTION</th></tr>";

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['profit']."</td>
                        <td>
                            <a href='edit_product.php?id=".$row['id']."'>edit</a> | 
                            <a href='delete_product.php?id=".$row['id']."'>delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No products found</td></tr>";
        }
        echo "</table>";
    }
    $conn->close();
    ?>

</body>
</html>
