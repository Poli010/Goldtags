<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "upload";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['accountPass'])) {
        $loginEmail = $_POST['email'];
        $loginPass = $_POST['accountPass'];

        $sql = "SELECT * FROM accounts WHERE email = ? AND accountPass = ?";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param('ss', $loginEmail, $loginPass);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result) {
                $count = $result->num_rows;
                if ($count == 1) {
                    $row = $result->fetch_assoc();
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['accountPass'];
                    header("Location: goldtags_apparel.php");
                    exit();
                } else {
                    echo '<script>
                        alert("Success.");
                        window.location.href = "goldtags_apparel.php";
                        </script>';
                }
            } else {
                echo "Error executing SQL: " . $stmt->error;
            }
        } else {
            echo "Error preparing SQL statement: " . $conn->error;
        }
    }
}
?>