<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile_edit.css">
    <title>Edit</title>
</head>
<body>
<div class="container">
                <h1>Edit Profile</h1>
                    <hr>
                    <form id="updateForm">
                    <input type="text" id="firstName" placeholder="First Name">
                    <input type="text" id="lastName" placeholder="Last Name">
                    <input type="number" id="phoneNumber" placeholder="Phone Number" min="0" max="99999999999" pattern="[0-9]{11}">
                    <input type="text" id="streetNum" placeholder="Street Number">
                    <input type="text" id="streetName" placeholder="Street Name">
                    <input type="text" id="block" placeholder="Block">
                    <input type="text" id="lot" placeholder="Lot">
                    <input type="text" id="baranggay" placeholder="Baranggay">
                    <input type="text" id="city" placeholder="City">
                    <button type="change" id="complete">Save</button>
                
 </div>
</form>
</script>
</body>
</html>