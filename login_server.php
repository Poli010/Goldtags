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
                    $_SESSION['userName'] = $row['userName']; // Assuming 'userName' is the column name in your 'accounts' table

                    // Redirect based on account type
                    $accountType = $row['account_type'];
                    if ($accountType === 'Admin') {
                        header("Location: adminpage.php");
                        exit();
                    } elseif ($accountType === '') {
                        header("Location: goldtags_apparel.php");
                        exit();
                    } elseif ($accountType === 'rider') {
                        header("Location: rider_acc.php");
                        exit();
                    } else {
                        header("Location: default_page.php");
                        exit();
                    }
                } else {
                    echo '<script>
                            alert("Invalid credentials.");
                            window.location.href = "login.php"; // Redirect to login page
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
