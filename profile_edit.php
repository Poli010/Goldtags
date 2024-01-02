<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<div class="container-fluid">
        <header>
            <img src="logo1.png" alt="">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link"><i class="fas fa-bell"></i></a>
                            <a class="nav-link" href="goldtags_apparel.php">Home</a>
                            <a class="nav-link" href="#">Pricing</a>
                            <a class="nav-link" href="#">About</a>
                            <a class="nav-link active" aria-current="page" href="#">Profile</a>
                        </div>
                    </div>
                </div>
            </nav>
            <hr>
        </header>
</div>

<h4>Edit your Profile</h4>

<input type="text" id="firstName" placeholder="First Name">
<input type="text" id="lastName" placeholder="Last Name">
<input type="number" id="phoneNum" placeholder="Phone Number" min="0" max="99999999999" pattern="[0-9]{11}">
<input type="text" id="streetNum" placeholder="Street Number">
<input type="text" id="streetName" placeholder="Street Name">
<input type="text" id="block" placeholder="Block">
<input type="text" id="lot" placeholder="Lot">
<input type="text" id="baranggay" placeholder="Baranggay">
<input type="text" id="city" placeholder="City">
<button type="change" id="complete">Complete</button>
</body>
</html>