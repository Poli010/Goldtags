<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="preview.css"> 
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="profile.php">Profile</a>
                    </div>
                </div>
            </div>
        </nav>
        <hr>
    </header>

    <div class="product-container">
        <div class="image">
            <img src="img\preview sample.jpg" height="200" width="200">
        </div>

        <div class="product-info">
            <p>Sample Product Name</p>
            <p>Sample Product Description</p>
            <p>Amount Available</p>
            <p>Choose Amount: </p>
            <div class="number-input">
            <button type="button" class="arrow-button">+</button>
            <input type="text" id="productNumber" class="smaller-input" placeholder="0">
            <button type="button" class="arrow-button">-</button>
            </div>
            <p>Total Amount: </p>           
            <button type="button" id="purchase">Purchase</button>

            <div class="write_review">
            <textarea id="review" placeholder="Write your Review"></textarea>
            <button type="button" id="submit_review">Submit</button>
            </div>
            <div class="review">
                <div class="user-info">
                    <i class="fas fa-user"></i>
                    <p>User126389233</p>
                </div>
                <div class="review-text">
                    <p>The product received was in good quality and matches the description.</p>
                </div>
            </div>
            </div>

          
    </div>

    <script>
    const purchaseButton = document.getElementById('purchase');

    purchaseButton.addEventListener('click', () => {
        window.location.href = "payment.php";
    });

    const textarea = document.getElementById('review');

textarea.addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
});
</script>
</body>
</html>