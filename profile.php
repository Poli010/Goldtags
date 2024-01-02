<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
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
                            <p id="userEmail"></p>
                        </div>
                    </div>
                </div>
            </nav>
            <hr>
        </header>
  

        <h4 style="text-align: center; font-size: 24px;">User<h4>
        
            <div class="user_profile">
                <div class="credentials">
                <img id="profilePicture" src="none.png" alt="Profile Picture" style="width: 100px; height: 100px; border-radius: 50%; cursor: pointer;">
                <input type="file" id="profilePictureInput" style="display: none;">
                <label for="profilePictureInput" id="uploadLabel" style="display: none;">Upload</label>
                    <p id="firstName"></p><p id="lastName"></p>
                        <div class="email">
                        <p id="email"></p>
                        </div>
                </div>

                <div class="address">
                    <h3>Phone Number: </h3><p id="phoneNumber"></p></br>
                    <h3>Street Name: </h3><p id="streetName"></p></br>
                    <h3>Street Number: </h3><p id="streetNum"></p><br>
                    <h3>Block: </h3><p id="block"></p></br>
                    <h3>Lot: </h3><p id="lot"></p></br>
                    <h3>Baranggay: </h3><p id="baranggay"></p></br>
                    <h3>City: </h3><p id="city"></p></br>
                    <i class="fa-light fa-cart-shopping"></i>
                    <p><a href="cart.php"> Cart </a></p><br>
                    <i class="fa-solid fa-bag-shopping"></i>
                    <p><a href="purchase_record.php">Purchased</a></p><br>
                    <button type="submit" id=change>Edit</button>
                </div>
            </div>
</div>

<script type="module">
       
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-app.js";
        import { getDatabase, ref, set, get, child, update, remove } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";
        import  {getAuth, onAuthStateChanged} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-auth.js";
        import { getStorage, uploadBytes, getDownloadURL } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-storage.js";

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
        const auth = getAuth(app);
        const storage = getStorage(app);
                                           
        const usersRef = ref(db, 'Users'); 
        
        const userID = localStorage.getItem('userId');

       
        function fetchUserData(userID) {
        const usersRef = ref(db, 'Users/' + userID); 
        get(usersRef).then((snapshot) => {
        if (snapshot.exists()) {
            const userData = snapshot.val();
            document.getElementById('firstName').textContent = userData.firstName;
            document.getElementById('lastName').textContent = userData.lastName;
            document.getElementById('email').textContent = userData.email;
           
            document.getElementById('phoneNumber').textContent = userData.phoneNumber;
            document.getElementById('streetName').textContent = userData.streetName;
            document.getElementById('streetNum').textContent = userData.streetNum;
            document.getElementById('block').textContent = userData.block;
            document.getElementById('lot').textContent = userData.lot;
            document.getElementById('baranggay').textContent = userData.baranggay;
            document.getElementById('city').textContent = userData.city;
        } else {
            console.log('No user data available');
        }
    }).catch((error) => {
        console.error('Error fetching user data:', error);
    });
}
        
        if (userID) {
            fetchUserData(userID);
        } else {
            console.log('User ID not found in localStorage');
        }


        const editButton = document.getElementById('change');

        editButton.addEventListener('click', () => {
            window.location.href = "profile_edit.php";
        });

    </script>

</body>
</html>