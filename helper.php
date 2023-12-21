<?php
// DataBase connection
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "22000015_christmas");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()) {
    die("La conexión con la BBDD ha fallado: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}

function attempt_login($username, $password, $connection) {
    // Sanitize the username to prevent SQL injection
    $sanitized_username = mysqli_real_escape_string($connection, $username);

    // Prepare the SQL query to retrieve the user
    $query = "SELECT * FROM data_users WHERE username = '$sanitized_username' LIMIT 1";

    // Execute the query
    $user_set = mysqli_query($connection, $query);
    if (!$user_set) {
        die("Database query failed.");
    }

    // Fetch the user data
    if ($user = mysqli_fetch_assoc($user_set)) {
        // Verify the password
        if (password_verify($password, $user['password'])) {
            return $user;
        }
    }

    // Return false if user not found or password does not match
    return false;
}

function save_letter($username, $letter, $gift1, $gift2, $gift3, $connection)
{
    $sanitized_username = mysqli_real_escape_string($connection, $username);
    $sanitized_letter = mysqli_real_escape_string($connection, $letter);

    $sanitized_gift1 = mysqli_real_escape_string($connection, $gift1);
    $sanitized_gift2 = mysqli_real_escape_string($connection, $gift2);
    $sanitized_gift3 = mysqli_real_escape_string($connection, $gift3);

    $query = "UPDATE data_users SET letter = '$sanitized_letter',gift1 = '$sanitized_gift1', gift2 = '$sanitized_gift2', gift3 = '$sanitized_gift3' WHERE username = '$sanitized_username'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Database query failed.");
    }
}
function getAllLetters($connection)
{
    $query = "SELECT username, name, letter, gift1, gift2, gift3 FROM data_users WHERE username != 'Melchor' AND username != 'Gaspar' AND username != 'Baltasar'";
    $results = mysqli_query($connection, $query);
    if (!$results) {
        die("Database query failed.");
    }
    return $results;
}