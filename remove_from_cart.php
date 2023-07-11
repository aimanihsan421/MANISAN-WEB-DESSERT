<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve cart item ID from query parameters
$cartItemId = $_GET['cart_item_id'];

// Remove the product from the cart
$sql = "DELETE FROM cart WHERE id = $cartItemId";
mysqli_query($conn, $sql);

// Retrieve updated cart items from the database
$sql = "SELECT products.name, products.price, cart.quantity, cart.id FROM cart INNER JOIN products ON cart.product_id = products.id";
$result = mysqli_query($conn, $sql);
$cartItems = [];

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $cartItems[] = $row;
  }
}

// Close the database connection
mysqli_close($conn);

// Return updated cart items as JSON response
header('Content-Type: application/json');
echo json_encode($cartItems);
?>
