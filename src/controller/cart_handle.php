<?php
session_start();
include '../model/cart_model.php';


// TO ADD ITEM IN CART
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['cart_btn'])) {
        $user_id = $_POST['user_id'];
        $product_id = $_POST['product_id'];
        $product_price = $_POST['product_price'];
        $selected_image = $_POST['selected_image'];
        // $selected_image = isset($_POST['selected_image_name']) ? $_POST['selected_image'] : 'product_image';


        $table = "products_cart";
        $uniqueColumn = $selected_image;
        $keys = "user_id, product_id, delete_status, product_price, selected_image";
        $values = "'$user_id', '$product_id', 0, '$product_price', '$selected_image'";
        $condition_1 = "user_id = $user_id";
        $condition_2 = "product_id = $product_id";
        // $condition_3 = "id IS NOT NULL";

        // Call the modified insertQuery function
        $insert_cart = insertQuery($table, $keys, $values, $uniqueColumn, $condition_1, $condition_2, $additionalColumns);

        if ($insert_cart) {
            $_SESSION['item_add_cart'] = "Item added successfully in cart";
            header("Location: ../view/cart.php");
            exit;
        } else {
            $_SESSION['item_add_cart_fail'] = "Item already exists in cart";
            header("Location: ../view/cart.php");
            exit;
        }
    }
}



// TO INSERT ITEM IN WISHLIST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['wishlist_btn'])) {
        $table = "product_wishlist";
        $user_id = $_POST['user_id'];
        $product_id = $_POST['product_id'];
        $selected_image = isset($_POST['selected_image_name']) ? $_POST['selected_image'] : 'product_image';
        $uniqueColumn = "selected_image";
        $keys = "user_id, product_id";
        $values = "'$user_id', '$product_id'";
        $condition_1 = "user_id = $user_id";
        $condition_2 = "product_id = $product_id";
        $insert_cart = insertQuery($table, $keys, $values, $uniqueColumn, $condition_1, $condition_2);
        if ($insert_cart) {
            $_SESSION['item_add_wishlist'] = "Item added successfully in wishlist";
            header("Location: ../view/wishlist.php");
            exit;
        } else {
            $_SESSION['item_add_wishlist_fail'] = "Item already exists in wishlist";
            header("Location: ../view/wishlist.php");
            exit;
        }
    }
}



// TO DELETE A CART ITEM
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['remove_cart_btn'])) {
        $user_id = $_POST['user_id'];
        $product_id = $_POST['product_id'];
        $table = "products_cart";
        $condition = "user_id = $user_id AND product_id = $product_id";
        $delete_cart = removeCartItem($table, $condition);
        if ($delete_cart) {
            $_SESSION['item_remove_cart'] = "Item removed from cart";
            header("Location: ../view/cart.php");
            exit;
        } else {
            $_SESSION['item_remove_cart_fail'] = "Can't remove item.... try again later";
            header("Location: ../view/cart.php");
            exit;
        }
    }
}




// TO DELETE A WISHLIST ITEM
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['remove_wishlist_btn'])) {
        $user_id = $_POST['user_id'];
        $product_id = $_POST['product_id'];
        $table = "product_wishlist";
        $condition = "user_id = $user_id AND product_id = $product_id";
        $delete_cart = removeCartItem($table, $condition);
        if ($delete_cart) {
            $_SESSION['item_remove_wishlist'] = "Item removed from wishlist";
            header("Location: ../view/wishlist.php");
            exit;
        } else {
            $_SESSION['item_remove_wishlist_fail'] = "Can't remove item.... try again later";
            header("Location: ../view/wishlist.php");
            exit;
        }
    }
}

// ANOTHER WAY TO REMOVE ITEMS FROM CART 
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if (isset($_POST['remove_cart_btn'])) {
//         $user_id = $_POST['user_id'];
//         $product_id = $_POST['product_id'];
//         $table = "products_cart";
//         $col_key = "delete_status";
//         $col_value = "1";
//         $condition = "user_id = $user_id AND product_id = $product_id";
//         $delete_cart = removeCartItem($table, $col_key, $col_value, $condition);
//         if ($delete_cart) {
//             $_SESSION['item_remove_cart'] = "Item removed from cart";
//             header("Location: ../view/cart.php");
//             exit;
//         } else {
//             $_SESSION['item_remove_cart_fail'] = "Can't remove item.... try again later";
//             header("Location: ../view/cart.php");
//             exit;
//         }
//     }
// }




// // FETCH PRODUCT DETAILS FOR CART
// $col = "*";
// $table_1 = "products_table";
// $table_2 = "products_cart";
// $table_3 = "users_table";
// $condition_1 = "products_table.id = products_cart.product_id";
// $condition_2 = "users_table.id = products_cart.user_id";
// $data_container = fetchCartProducts($col, $table_1, $table_2, $table_3, $condition_1, $condition_2);
?>