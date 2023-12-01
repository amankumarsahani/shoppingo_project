<?php
include '../../config/connection.php';

$user_id = $_SESSION['user_login'];
// FETCH CART ITEMS
$fetch_cart_query = "SELECT products_table.* FROM `products_table` INNER JOIN `products_cart` ON products_table.id = products_cart.product_id INNER JOIN 
  `users_table` ON users_table.id = products_cart.user_id WHERE users_table.id = $user_id AND products_cart.delete_status = 0";
$execute = mysqli_query($conn, $fetch_cart_query);
$count = mysqli_num_rows($execute);
while ($row = mysqli_fetch_assoc($execute)) {
    $data_container[] = $row;
}
?>