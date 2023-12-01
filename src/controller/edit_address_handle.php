<?php
session_start();

// MODEL FILE
include '../model/user_address.php';

// ID OF LOGGED IN USER
$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['edit_address_btn'])) {
        $pincode = trim(htmlentities($_POST["pin_code"], ENT_QUOTES, 'UTF-8'));
        $address = trim(htmlentities($_POST["address"], ENT_QUOTES, 'UTF-8'));
        $state = trim(htmlentities($_POST["state"], ENT_QUOTES, 'UTF-8'));
        $city = trim(htmlentities($_POST["city"], ENT_QUOTES, 'UTF-8'));
        $landmark = trim(htmlentities($_POST["landmark"], ENT_QUOTES, 'UTF-8'));
        $contact = trim(htmlentities($_POST["contact"], ENT_QUOTES, 'UTF-8'));
        $user_address_id = $_POST['user_specific_id'];
        // $currentDateTime = date('Y-m-d H:i:s');
        // var_dump($user_address_id);

        
        $table = "user_address";
        $set_val = "pin_code='$pincode', address='$address', state='$state', city='$city', landmark='$landmark', contact_number='$contact'";
        // $col_value = "$pincode, $address, $state, $city, $landmark, $contact";
        $condition_1 = "user_id = $user_id";
        $condition_2 = "id = $user_address_id";
        $update_address = editAddress($table, $set_val, $condition_1, $condition_2);

        if ($update_address) {
            echo "Address updated";
        } else {
            echo "Update address failed: " . mysqli_error($conn);
        }

    }
}
?>