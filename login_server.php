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

                    // Check if verification_code and signup_verification are the same
                    if (
                        isset($row['verification_code']) &&
                        isset($row['signup_verification']) &&
                        $row['verification_code'] === $row['signup_verification']
                    ) {
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
                                alert("Account not verified. Please verify your account first. Check your email were already sent you a verification code. Thankyou!");
                                window.location.href = "verify.php"; // Redirect to verification page
                              </script>';
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
