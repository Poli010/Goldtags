<?php
    $conn = mysqli_connect("localhost", "root", "", "upload");

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $query = "SELECT image FROM tb_upload WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $imageFileName = $row['image'];

        $imagePath = 'img/' . $imageFileName; 
        if (file_exists($imagePath)) {
            unlink($imagePath); // Deletes the file
        }

        $sql = "DELETE FROM tb_upload WHERE id = '$id'";
        $query_run = mysqli_query($conn, $sql);

        if ($query_run) {
            echo '<script> alert("Data deleted"); </script>';
            header("Location: adminpage.php");
        } else {
            echo '<script> alert("Data not deleted"); </script>';
        }
    }
?>
