<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile_edit.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <form id="updateForm">
            <input type="text" id="firstName" placeholder="First Name">
            <input type="text" id="lastName" placeholder="Last Name">
            <input type="text" id="userName" placeholder="User Name">
            <input type="number" id="contact_number" placeholder="Phone Number" min="0" max="99999999999" pattern="[0-9]{11}">
            <button type="submit" id="complete" name="save">Save</button> 
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script>
     $(document).ready(function(){
        $('#updateForm').submit(function(e){
            e.preventDefault(); 
            
            var formData = {
                firstName: $('#firstName').val(),
                lastName: $('#lastName').val(),
                userName: $('#userName').val(),
                contact_number: $('#contact_number').val()
            };
            
            $.ajax({
                type: 'POST',
                url: 'update_profile.php',
                data: formData,
                success: function(response){
                    Swal.fire({
                        icon: 'success',
                        title: 'Profile updated successfully!',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'profile.php';
                        }
                    });
                },
                error: function(xhr, status, error){
                    alert('An error occurred while updating profile.');
                    console.error(xhr.responseText);
                }
            });
        });
    });
    </script>
</body>
</html>
