<?php
// Database Connection
include '../../config/connection.php';

// INSERT QUERY
function addAddress($table, $col_keys, $col_values)
{
    global $conn;
    $col_values = implode(', ', array_map(function ($value) use ($conn) {
        return is_numeric($value) ? $value : "'" . mysqli_real_escape_string($conn, $value) . "'";
    }, explode(', ', $col_values)));
    $insert_query = "INSERT INTO $table ($col_keys) VALUES ($col_values)";
    $execute = mysqli_query($conn, $insert_query);
    return $execute;
}


// // FETCH QUERY
// function fetchAddress($col, $table, $condition)
// {
//     global $conn;
//     $data_container = array();
//     $fetch_query = "SELECT $col FROM $table WHERE $condition";
//     $execute = mysqli_query($conn, $fetch_query);
//     while ($row = mysqli_fetch_array($execute, MYSQLI_ASSOC)) {
//         array_push($data_container, $row);
//     }
//     if (!empty($data_container)) {
//         return $data_container;
//     } else {
//         return false;
//     }
// }

function fetchAddress($user_id)
{
    global $conn;
    $data_container = array();
    $fetch_query = "SELECT * FROM `user_address` WHERE user_id = ?";
    $stmt = mysqli_prepare($conn, $fetch_query);
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);
    $execute = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($execute)) {
        $data_container[] = $row;
    }
    return $data_container;
}




// function editAddress($table, $col_key, $col_value, $condition_1, $condition_2)
// {
//     global $conn;
//     $edit_query = "UPDATE $table SET $col_key = ? WHERE $condition_1 AND $condition_2";
//     $execute = mysqli_prepare($conn, $edit_query);
//     mysqli_stmt_bind_param($execute, "sssssss", $col_value);
//     return $execute;
// }





function editAddress($table, $set_val, $condition_1, $condition_2)
{
    global $conn;
    // var_dump($condition_1);
    // var_dump($condition_2);
    // var_dump($col_key);
    // var_dump($col_value);
    $edit_query = "UPDATE $table SET $set_val WHERE $condition_1 AND $condition_2";
    var_dump($edit_query);
    $execute = mysqli_query($conn, $edit_query);
    // $stmt = mysqli_prepare($conn, $edit_query);
    // if (!$stmt) {
    //     die("Prepare failed: " . mysqli_error($conn));
    // }
    // mysqli_stmt_bind_param($stmt, 'isssss', $col_value);
    // $execute = mysqli_stmt_execute($stmt);
    // if (!$execute) {
    //     die("Execute failed: " . mysqli_error($conn));
    // }
    // mysqli_stmt_close($stmt);
    return $execute;
}

?>