<?php
$conn = mysqli_connect('localhost', 'root', '', 'upload');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tb_upload WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goldtag</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>

    <div class="container">
        <section id="productDetails">
            <p style="display: none;" id="selectedProductNumber"></p>
            <h1>Product Name: <span id="selectedProductName"><?php echo $row['name']; ?></span></h1>
            <h1>Product Price: <span id="selectedProductPrice"><?php echo $row['product_price']; ?></span></h1>

            <h4>Input your Address</h4>
            <input type="text" placeholder="Street No." id="streetNum" required>
            <input type="text" placeholder="Block" id="block" required>
            <input type="text" placeholder="Lot" id="lot" required>
            <input type="text" placeholder="Baranggay" id="baranggay" required>
            <input type="text" placeholder="City" id="city" required>
            <input type="text" placeholder="Zip Code" id="zip" required>

            <br>
            <p1>Please Select your Payment Method</p1>
            <div id="paymentMethod">
                <p>
                    <label for="cod">COD</label>
                    <input type="radio" id="cod" value="faceToFace">
                </p>
            </div>  
            <h4>Product Details</h4>
            <button type="button" id="purchase">Purchase</button>
            <span id="selectedProductDetails"></span>
        </section>
    </div>
    
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-app.js";
        import { getDatabase, ref, set, get } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";
        const firebaseConfig = {
            apiKey: "AIzaSyCKFLDnY6nvXO9YHXZ56k6jE4q4esbyKNw",
            authDomain: "goldtags-afbf1.firebaseapp.com",
            databaseURL: "https://goldtags-afbf1-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "goldtags-afbf1",
            storageBucket: "goldtags-afbf1.appspot.com",
            messagingSenderId: "476543580017",
            appId: "1:476543580017:web:b7a8c4afe121d3155b28d0"
            };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const db = getDatabase(app);
        const productsRef = ref(db, 'Pending Products');

        const purchaseBtn = document.getElementById('purchase');
        const selectedProductName = localStorage.getItem('selectedProductName');
        const selectedProductPrice = localStorage.getItem('selectedProductPrice');

        purchaseBtn.addEventListener('click', function() {
            const streetNum = document.getElementById('streetNum').value;
            const block = document.getElementById('block').value;
            const lot = document.getElementById('lot').value;
            const baranggay = document.getElementById('baranggay').value;
            const city = document.getElementById('city').value;
            const zip = document.getElementById('zip').value;

            const productPendingData = {
                productName: selectedProductName,
                productPrice: selectedProductPrice,
                address: {
                    streetNum,
                    block,
                    lot,
                    baranggay,
                    city,
                    zip
                },
    
            };

            if ( streetNum && block && lot && baranggay && city && zip) {
                const pendingProduct = generateProductNumber();

                set(ref(db, `Pending Products/${pendingProduct}`), productPendingData)
                    .then(() => {
                        alert("Thank you for your purchase, please wait until we have fully verified your product to start delivering");
                        window.location.href = 'userpage.html';
                    })
                    .catch((error) => {
                        alert("Error adding product: " + error.message);
                    });
            } else {
                alert("Please fill in all fields!");
            }
        });

        function generateProductNumber() {
            // Logic to generate a unique product number based on your requirements
            return `Product-${Date.now()}`;
        }
    </script>
</body>
</html>