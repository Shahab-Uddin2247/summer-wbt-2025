<?php
$conn = new mysqli("localhost", "root", "", "product_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';

    $sql = "UPDATE products 
            SET name='$name', buying_price='$buying_price', selling_price='$selling_price', display='$display'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
   
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
    <style>
        body {
            width: 20%;
            margin: 15px auto;
        }
    </style>
    <h2>EDIT PRODUCT</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>Name</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

        <label>Buying Price</label><br>
        <input type="number" step="0.01" name="buying_price" value="<?php echo $row['buying_price']; ?>"><br><br>

        <label>Selling Price</label><br>
        <input type="number" step="0.01" name="selling_price" value="<?php echo $row['selling_price']; ?>"><br><br>

        <label>Display</label>
        <input type="checkbox" name="display" value="Yes" <?php if($row['display']=='Yes') echo "checked"; ?>><br><br>

        <input type="submit" value="SAVE">
    </form>
<?php
}
$conn->close();
?>
