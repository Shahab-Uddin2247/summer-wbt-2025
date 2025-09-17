<?php
$conn = new mysqli("localhost", "root", "", "product_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM products WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
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
    <h2>DELETE PRODUCT</h2>
    <p>Name: <?php echo $row['name']; ?></p>
    <p>Buying Price: <?php echo $row['buying_price']; ?></p>
    <p>Selling Price: <?php echo $row['selling_price']; ?></p>
    <p>Displayable: <?php echo $row['display']; ?></p>

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" value="Delete">
    </form>
<?php
}
$conn->close();
?>